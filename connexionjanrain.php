<?php
// Ici, un script basique pour recevoir les données des fournisseurs (requiert PHP 5 ou plus)
// Vous devez avoir installé CURL HTTP fetching library

$JanRainApiKey = '968357139899640';  

if(isset($_POST['token'])) { // Si l'utilisateur tente de se connecter avec JanRain

	/* ÉTAPE 1 : récupérer le paramètre token */
	$token = $_POST['token'];

	/* ÉTAPE 2 : utiliser le token pour envoyer une requête vers le serveur de JanRain, qui interrogera à son tour le fournisseur */
	$post_data = array('token' => $_POST['token'],
		'apiKey' => $JanRainApiKey,
		'format' => 'json'); 

	$curl = curl_init(); // Initialisation
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Retourne le résultat du transfert au lieu de l'afficher
	curl_setopt($curl, CURLOPT_URL, 'https://rpxnow.com/api/v2/auth_info'); // On définit l'URL cible à récupérer
	curl_setopt($curl, CURLOPT_POST, true); // On dit à PHP de faire un HTTP POST (comme pour les formulaires)
	curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data); // Données à fournir par HTTP POST
	curl_setopt($curl, CURLOPT_HEADER, false); // On dit de ne pas renvoyer l'en-tête dans la valeur de retour
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // On ne vérifie pas le certificat SSL
	$raw_json = curl_exec($curl); // On exécute la requête
	curl_close($curl); // On ferme la connexion


	/* ÉTAPE 3 : décoder la réponse Json */
	$auth_info = json_decode($raw_json, true);

	if ($auth_info['stat'] == 'ok') { // Si tout est OK
  
		/* ÉTAPE 4 : récupérer les infos à partir de la réponse */
		$profile = $auth_info['profile']; // Les infos sur le membre
		$identifier = $profile['identifier']; // Le lien

		if (isset($profile['photo']))  { // Avatar
			$photo_url = $profile['photo'];
		}

		if (isset($profile['displayName']))  { // Nom à afficher
			$displayName = $profile['displayName'];
		}

		if (isset($profile['email']))  { // E-mail
			$email = $profile['email'];
		}

		session_start(); // On démarre les sessions
		// Connexion à la BDD
		$PARAM_hote='localhost'; // Le chemin vers le serveur
		$PARAM_port='3306';
		$PARAM_nom_bd='ma-games'; // Le nom de votre base de données
		$PARAM_utilisateur='root'; // Nom d'utilisateur pour se connecter
		$PARAM_mot_passe=''; // Mot de passe de l'utilisateur pour se connecter
		try {
			$connexion = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
		} catch(Exception $e) {
			echo 'Erreur : '.$e->getMessage().'<br />';
			echo 'N° : '.$e->getCode();
		}
		$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // Lance une alerte à chaque requête échouée

		// On compte le nombre de user ayant pour identifier celui retourné par JanRain
		$nombreResulat = $connexion->query('SELECT COUNT(*) FROM user WHERE iduser = \''.$identifier.'\'')->fetchColumn();
		if ($nombreResulat == 1) { // S'il y a un résultat
			$query = $connexion->query('SELECT nom, id FROM user WHERE iduser = \''.$identifier.'\'');
			$donnees = $query->fetch(PDO::FETCH_ASSOC); // On met en forme la réponse de la BDD
			$_SESSION['nom'] = $donnees['nom'];
			$_SESSION['id'] = $donnees['id']; // On identifie le membre
			$message = '<p>Bienvenue '.htmlspecialchars($donnees['nom']).', 
			vous êtes maintenant connecté !</p>
			<p><a href="./index.php">Cliquez ici</a> 
			pour revenir à la page d\'accueil</p>'; // Message
		} elseif (isset($email)) {
			// On compte le nombre de user ayant pour e-mail celui retourné par JanRain
			$nombreResulat = $connexion->query('SELECT COUNT(*) FROM user WHERE email = \''.$email.'\'')->fetchColumn();
			if ($nombreResulat == 1) { // S'il y a un résultat
				$query = $connexion->query('SELECT id, nom FROM user WHERE email = \''.$email.'\'');
				$donnees = $query->fetch(PDO::FETCH_ASSOC);
				$message = '<p>Vous pouvez vous connecter avec un compte externe en cliquant seulement sur un bouton ! Seulement, êtes-vous bien <strong>'.$donnees['nom'].'</strong> ? Cette question ne vous sera plus posée à l\'avenir.</p>
				<form action="?JanRain_lier">
				<input type="hidden" name="token" value="'.$token.'"/>
				<input type="submit" value="Oui"/> <a href="./connexion.php"><input type="button" value="Non"/></a>
				</form>';
			} else { // S'il n'y a pas de résultat
				$message = '<p>Vous pouvez vous connecter avec un compte externe en cliquant seulement sur un bouton ! Seulement, nous vous demandons de vous connecter avec votre compte sur ce site. Cette question ne vous sera plus posée à l\'avenir.</p>
				<form action="?JanRain_lier" method="post">
				<input type="text" name="nom"/>
				<input type="password" name="password"/>
				<input type="hidden" name="token" value="'.$token.'"/>
				<input type="submit" value="Valider"/>
				</form>'; // Formulaire de connexion
			}
		} else { // S'il n'y a pas d'e-mail
			$message = '<p>Vous pouvez vous connecter avec un compte externe en cliquant seulement sur un bouton ! Seulement, nous vous demandons de vous connecter avec votre compte sur ce site. Cette question ne vous sera plus posée à l\'avenir.</p>
			<form action="?JanRain_lier" method="post">
			<input type="text" name="nom"/>
			<input type="password" name="password"/>
			<input type="hidden" name="token" value="'.$token.'"/>
			<input type="submit" value="Valider"/>
			</form>'; // Formulaire de connexion
		}

		if (isset($_GET['JanRain_lier'])) { // Si on demande de lier un compte
			if (isset($_SESSION['iduser'])) { // Si le membre s'est connecté
				$query = $connexion->prepare('UPDATE user SET iduser = ? WHERE iduser = ?'); // On change l'identifier du membre de la BDD
				$req->execute(array($identifier, $_SESSION['id']));
				echo '<p>Le compte a bien été lié. Vous n\'avez qu\'à cliquer sur un bouton pour vous connecter !</p>'; // Message
			} else { // Sinon, il n'est pas connecté
				$query = $connexion->prepare('UPDATE user SET identifier = ? WHERE mail = ?'); // On modifie la table
				$req->execute(array($identifier, $email));
				$query = $connexion->query('SELECT id, nom FROM user WHERE mail = \''.$email.'\''); // On récupère les données concernant le membre
				$donnees = $query->fetch(PDO::FETCH_ASSOC);
				$_SESSION['nom'] = $donnees['nom']; // On connecte le membre
				$_SESSION['id'] = $donnees['id'];
				$message = '<p>Le compte a bien été lié. Vous n\'avez qu\'à cliquer sur un bouton pour vous connecter !</p>'; // Message
			}
		}

	} else { /* Une erreur est survenue */
		// On affiche l'erreur
		echo 'Une erreur est survenue : ' . $auth_info['err']['msg'];
	}
}
echo $message;
?>
