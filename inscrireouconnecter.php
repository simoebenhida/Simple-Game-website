
<?php include "page/hautpage.php";
$a = $_SERVER["QUERY_STRING"];

if(!empty($_GET['cbrp'])){
$cbrp = $_GET['cbrp'];
	$prix = $cbrp*10;
	
}
else
{
	echo '<script language="Javascript">

document.location.replace("index.php");

</script>';
}
?>
<link href="css/test.css" rel="stylesheet">	
<link href="css/test1.css" rel="stylesheet">	
		<img src="images/dofuslogin1.jpg" width="1900px" height="288px">
 <div class="container">
   
 
		
			
			
    	<div class="bg">
	    	  	
			</br>
    		<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form method="post" action="connecter-login">
							<input type="email" name="email" placeholder="Email" required/>
							<input type="password" name="mdp" placeholder="mot de passe" required/>
							<input type="hidden" name="cbrp" value="<?php echo $cbrp;?>" >
							<input type="hidden" name="prix" value="<?php echo $prix;?>" >
							
							
							<span>
								<input type="checkbox" class="checkbox"> 
								Sauvegarder mon mot de passe
							</span>
							<button type="submit" class="button button-rounded button-action">Se connecter</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OU</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Creer un Nouveau Compte!</h2>
						<form method='post' action="soinscri.php">
							<input type="text" name="nom" placeholder="Nom*" required/>
							<input type="text" name="prenom" placeholder="Prenom*" required/>
							<input type="hidden" name="cbrp" value="<?php echo $cbrp;?>" >
							<input type="hidden" name="prix" value="<?php echo $prix;?>" >
							<input type="email" name="email" placeholder="Email*" required/>
							<input type="password" name="mdp" placeholder="mot de passe*" required/>
							<input type="password" name="mdp2" placeholder="Retaper votre mot de passe*" required/>
							
				
				</br>
				<div class="g-recaptcha" data-sitekey="6LcCKBgTAAAAAOD5lQnynpRjdsQRkEq5I5FZrTnO"></div></br>
						<button type="submit" class="button button-rounded button-action">S'inscrire</button>
					
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		
			
		
			</div>
			</div>
			</br></br></br>
			
				
				
	<?php

	include "page/baspage.php";
	?>