<?php
if (!isset($_SESSION)) {
    session_start();
    if(empty($_SESSION['connected'])){
        $_SESSION['connected']=0;
    }
}
function connexionBdd() {
    $conn = new mysqli('localhost', 'root', '', 'ma-games');
    //$conn = new mysqli('mysql.hostinger.fr', 'u885690161_admin', 'doriandenis', 'u885690161_orni');
    return $conn;
}
function logRightAfterRegister($email) {
   $co = connexionBdd();
    $rechercheMail = "SELECT * FROM user WHERE email='" . $email . "' ";
    $tabResultat = mysqli_fetch_array(mysqli_query($co, $rechercheMail));
    $id = getIdUserByPseudo($email);

    $_SESSION['connected'] = 1;
    $_SESSION['nom'] = $tabResultat['nom'];
    $_SESSION['id'] = $id;

  echo '<script language="Javascript">

document.location.replace("index.php");

</script>';
}

function soinscri($email,$cbrp,$prix) {
    $co = connexionBdd();
    $rechercheMail = "SELECT * FROM user WHERE email='" . $email . "' ";
    $tabResultat = mysqli_fetch_array(mysqli_query($co, $rechercheMail));
    $id = getIdUserByPseudo($email);

    $_SESSION['connected'] = 1;
    $_SESSION['nom'] = $tabResultat['nom'];
    $_SESSION['id'] = $id;


 echo '<script language="Javascript">

document.location.replace("commanderiot.php?cbrp='.$cbrp.'");

</script>';
}


function novore($email,$kamas) {
    $co = connexionBdd();
    $rechercheMail = "SELECT * FROM user WHERE email='" . $email . "' ";
    $tabResultat = mysqli_fetch_array(mysqli_query($co, $rechercheMail));
    $id = getIdUserByPseudo($email);

    $_SESSION['connected'] = 1;
    $_SESSION['nom'] = $tabResultat['nom'];
    $_SESSION['id'] = $id;


  echo '<script language="Javascript">

document.location.replace("nouveautedofus.php?kamas=' .$kamas.' ");

</script>';
}

function goristo($email,$serveur,$kamas) {
    $co = connexionBdd();
    $rechercheMail = "SELECT * FROM user WHERE email='" . $email . "' ";
    $tabResultat = mysqli_fetch_array(mysqli_query($co, $rechercheMail));
    $id = getIdUserByPseudo($email);

    $_SESSION['connected'] = 1;
    $_SESSION['nom'] = $tabResultat['nom'];
    $_SESSION['id'] = $id;


  echo '<script language="Javascript">

document.location.replace("commandedofuss.php?serveur='.$serveur.'&kamas=' .$kamas.' ");

</script>';
}
	
	
	
	
			
function insertintoemailnews($email) {
  $co = connexionBdd();
        $requete = "INSERT INTO emailnews VALUES (NULL,'" . $email . "')";
        $doQuery = mysqli_query($co, $requete);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
}
	
	
	
	
function insertIntoUser($nom,$prenom,$passe,$email) {
	
    if (isAlreadyRegistered($email) == false) {
        $co = connexionBdd();
        $requete = "INSERT INTO user VALUES (NULL, '" . $nom . "','" . $prenom . "','" . $passe . "','" . $email . "',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)";
        $doQuery = mysqli_query($co, $requete);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        
    } else {
      ?>  <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                Cette adresse émail existe déja.
              </div>
			  <?php 
    }
}

	

function lectureTableauPhpResultatRequete($objetMySql) {

    if (mysqli_num_rows($objetMySql) > 0) {
        $tab;

        while ($tabSql = mysqli_fetch_array($objetMySql)) {

            foreach ($tabSql as $key => $value) {
                if (!is_int($key)) {
                    $tab[$key][] = $value;
                }
            }
        }
        return $tab;
    }
}
		
function insertintocommandedofuswu($serveur,$kamas,$montant, $npdofus, $name, $iduser, $wuname, $wuphone) {
  $co = connexionBdd();
  $date = date("j/n/Y"); 
        $requete = "INSERT INTO commandedofus VALUES (NULL, '" . $serveur . "','" . $kamas . "','" . $montant . "', '" . $npdofus . "','" . $name . "','" . $iduser . "','" . $wuname . "','" . $wuphone . "',NULL,NULL,NULL,'" .$date. "',0)";
        $doQuery = mysqli_query($co, $requete);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
}

function insertintovalidation($refer,$codepaiement,$utilisateur, $mdpp) {
  $co = connexionBdd();
  $date = date("j/n/Y"); 
        $requete = "INSERT INTO validation VALUES (NULL, '" . $refer . "','" . $codepaiement . "','" . $utilisateur . "', '" . $mdpp . "')";
        $doQuery = mysqli_query($co, $requete);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
}		


function insertintocommandedofuswafa($serveur,$kamas,$montant, $npdofus, $wafaname, $wafaphone) {
  $co = connexionBdd();
  $date = date("j/n/Y"); 
        $requete = "INSERT INTO commandedofus VALUES (NULL, '" . $serveur . "','" . $kamas . "','" . $montant . "', '" . $npdofus . "','" . $name . "','" . $iduser . "',NULL,NULL,'" . $wafaname . "','" . $wafaphone . "',NULL,'" .$date. "',0)";
        $doQuery = mysqli_query($co, $requete);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
}
function insertintocommandedofuspaypal($serveur,$kamas,$montant, $npdofus, $name, $iduser,$paypalname) {
  $co = connexionBdd();
  $date = date("j/n/Y"); 
        $requete = "INSERT INTO commandedofus VALUES (NULL, '" . $serveur . "','" . $kamas . "','" . $montant . "', '" . $npdofus . "','" . $name . "','" . $iduser . "',NULL,NULL,NULL,NULL,'" . $paypalname . "','" .$date. "',0)";
        $doQuery = mysqli_query($co, $requete);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
}


function insertintocommandedofus($serveur,$kamas,$montant,$name,$iduser,$a,$npdofus) {
  $co = connexionBdd();
  $date = date("j/n/Y"); 
        $requete = "INSERT INTO commandedofus VALUES (NULL, '" . $serveur . "','" . $kamas . "','" . $montant . "','" . $npdofus . "','" . $name . "','" . $iduser . "',NULL,NULL,NULL,NULL,NULL,'" .$date. "',0,'" .$a. "')";
        $doQuery = mysqli_query($co, $requete);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
}




function insertintocommanderiot($cbrp,$prix,$name,$iduser,$a) {
  $co = connexionBdd();
  $date = date("j/n/Y"); 

        $requete = "INSERT INTO commanderiot VALUES (NULL,'" . $cbrp . "','" . $prix . "','" . $name . "','" . $iduser . "',NULL,NULL,NULL,NULL,NULL,'" .$date. "',0,'" .$a. "',NULL)";
        $doQuery = mysqli_query($co, $requete);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
}






function isAlreadyRegistered($email) {
    $registered = false;
//Pseudo existe deja => registered=true, echo pseudo deja utilisé
//Email existe deja
//Couple Nom/Prenom existe deja
    $co = connexionBdd();
    $rechercheMail = "SELECT * FROM user WHERE email='" . $email . "' ";
    $resultatMail = mysqli_query($co, $rechercheMail);
    $nbLignesMail = mysqli_num_rows($resultatMail);
    if ($nbLignesMail == 1) {
        $registered = true;
    }
   
    return $registered;
}
function logClassic($email) {

    $co = connexionBdd();
    $rechercheMail = "SELECT * FROM user WHERE email='" . $email . "' ";
    $tabResultat = mysqli_fetch_array(mysqli_query($co, $rechercheMail));
    $id = getIdUserByPseudo($email);

    $_SESSION['connected'] = 1;
    $_SESSION['nom'] = $tabResultat['nom'];
    $_SESSION['id'] = $id;
   
     
echo '<script language="Javascript">

document.location.replace("index.php");

</script>';

	
 
}


function socon($email,$cbrp,$prix) {

    $co = connexionBdd();
    $rechercheMail = "SELECT * FROM user WHERE email='" . $email . "' ";
    $tabResultat = mysqli_fetch_array(mysqli_query($co, $rechercheMail));
    $id = getIdUserByPseudo($email);

    $_SESSION['connected'] = 1;
    $_SESSION['nom'] = $tabResultat['nom'];
    $_SESSION['id'] = $id;
   
     
echo '<script language="Javascript">

document.location.replace("commanderiot.php?cbrp='.$cbrp.'");

</script>';
	
 
}


function novolo($email,$kamas) {

    $co = connexionBdd();
    $rechercheMail = "SELECT * FROM user WHERE email='" . $email . "' ";
    $tabResultat = mysqli_fetch_array(mysqli_query($co, $rechercheMail));
    $id = getIdUserByPseudo($email);

    $_SESSION['connected'] = 1;
    $_SESSION['nom'] = $tabResultat['nom'];
    $_SESSION['id'] = $id;
   
     
echo '<script language="Javascript">

document.location.replace("nouveautedofus.php?kamas=' .$kamas.' ");

</script>';
	
 
}



function gogino($email,$serveur,$kamas) {

    $co = connexionBdd();
    $rechercheMail = "SELECT * FROM user WHERE email='" . $email . "' ";
    $tabResultat = mysqli_fetch_array(mysqli_query($co, $rechercheMail));
    $id = getIdUserByPseudo($email);

    $_SESSION['connected'] = 1;
    $_SESSION['nom'] = $tabResultat['nom'];
    $_SESSION['id'] = $id;
   
     
echo '<script language="Javascript">

document.location.replace("commandedofuss.php?serveur='.$serveur.'&kamas=' .$kamas.' ");

</script>';
	
 
}


function dofuscommande($email) {

    $co = connexionBdd();
    $rechercheMail = "SELECT * FROM user WHERE email='" . $email . "' ";
    $tabResultat = mysqli_fetch_array(mysqli_query($co, $rechercheMail));
    $id = getIdUserByPseudo($email);

    $_SESSION['connected'] = 1;
    $_SESSION['nom'] = $tabResultat['nom'];
    $_SESSION['id'] = $id;
   
     
echo '<script language="Javascript">

document.location.replace("commandedofus");

</script>';

	
 
}



function gamecommande($email) {

    $co = connexionBdd();
    $rechercheMail = "SELECT * FROM user WHERE email='" . $email . "' ";
    $tabResultat = mysqli_fetch_array(mysqli_query($co, $rechercheMail));
    $id = getIdUserByPseudo($email);

    $_SESSION['connected'] = 1;
    $_SESSION['nom'] = $tabResultat['nom'];
    $_SESSION['id'] = $id;
   
     
echo '<script language="Javascript">

document.location.replace("games");

</script>';

	
 
}
function getIdUserByPseudo($email) {
    $co = connexionBdd();
    $requete = "SELECT * FROM user WHERE email='" . $email . "'";
    $query = mysqli_query($co, $requete);
    if (!$query) {
        die('Invalid query: ' . mysql_error());
    }
    $tabQuery = mysqli_fetch_array($query);
    return $tabQuery['idUser'];
}