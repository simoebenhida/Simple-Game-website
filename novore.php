<?php include "page/hautpage.php";

if ($_SESSION['connected'] == 1)
					{echo '<script language="Javascript">

document.location.replace("index.php");

					</script>';
						}
					else
					{
					
		
?>

				<section id="form">
	<img src="images/dofuslogin1.jpg" width="1900px" height="288px">
		<div class="container">
		
			<div class="row">
			<div class="col-sm-99">
			
			
			<?php 
require 'recaptchalib.php';
$siteKey = '6LcCKBgTAAAAAOD5lQnynpRjdsQRkEq5I5FZrTnO'; // votre clé publique
$secret = '6LcCKBgTAAAAANvYJxGQKPqC5oAkD7wpFnCIDowh'; // votre clé privée

if (!empty($_POST)) {
	$kamas = $_POST['kamas'];
	$montant = $kamas * 6;
//    echo var_dump($_POST);
//    echo var_dump($_FILES);
    $erreur = false;

    if (empty($_POST["nom"])) {
  
        $erreur = true;
    }
    

    if (empty($_POST["email"])) {
        
        $erreur = true;
    }
    if (empty($_POST["mdp"])) {
         
        
        $erreur = true;
    }
    if (empty($_POST["mdp2"])) {
        
        $erreur = true;
    }



    $existeDeja = isAlreadyRegistered($_POST['email']);
    if ($existeDeja == true) {
        $erreur = true;
		 ?>   <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                Cette adresse email existe deja.
              </div>
		 
		 
		 <?php
    }
	 if (strlen($_POST["mdp"]) < 7) {
         ?> 
       <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                Votre mot de passe doit contenir au moins 8 chiffres.
              </div>



	   <?php
        
        $erreur = true;
    }

    if ((($_POST['mdp']) != ($_POST['mdp2'])) && ($existeDeja == false)) {
        ?>   <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                La verification de mot de passe ne correspond pas au mot de passe precedemment saisi.
              </div>
		 
		 
		 <?php
        
        $erreur = true;
    }
	

	$reCaptcha = new ReCaptcha($secret);
if(isset($_POST["g-recaptcha-response"])) {
    $resp = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
        );
    if ($resp != null && $resp->success) {}
    else {
		
		?>
	<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                CAPTCHA incorrect.
              </div>

	<?php
		$erreur = true;
	}
    }
	
	
	
	
        

    if ($erreur == true) {
 
       
    } else {
		
        //Récupération de la photo de profil de l'utilisateur
    
        // Ajout dans BDD
       $co = connexionBdd();
	   
       insertIntoUser($_POST["nom"],$_POST["prenom"],sha1($_POST["mdp"]),$_POST["email"]);

        //Finalisation Inscription
    novore($_POST['email'],$_POST['kamas']);
		
	   
    }
	  
     
       
 }
	?>		
			
			
			
			
					<div class="signup-form"><!--sign up form-->
						<h2>Creer un Nouveau Compte!</h2>
						<form method='post' action="">
							<input type="text" name="nom" placeholder="Nom*" required/>
							<input type="text" name="prenom" placeholder="Prénom*" required/>
							<input type="email" name="email" placeholder="Email*" required/>
							<input type="password" name="mdp" placeholder="mot de passe*" required/>
							<input type="password" name="mdp2" placeholder="Retaper votre mot de passe*" required/>
							<input type="hidden" name="kamas" value="<?php echo $kamas;?>" >
							<input type="hidden" name="montant" value="<?php echo $montant;?>" >
				
				</br>
				<div class="g-recaptcha" data-sitekey="6LcCKBgTAAAAAOD5lQnynpRjdsQRkEq5I5FZrTnO"></div></br>
				<div class="biitii">
						<button type="submit" class="button button-rounded button-action">S'inscrire</button>
						</div>
					
						</form>
					</div><!--/sign up form-->
			</div>
			
		</div>
		</div>
	</section><!--/form-->
	<?php 
				}	
	include "page/baspage.php";?>