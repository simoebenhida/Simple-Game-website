

<?php

if ($_POST) {
    $erreurSaisie = false;
    $erreurEmail = false;
    if (empty($_POST["email"])) {	
        ?>
        <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                Le champ pseudo est vide.
              </div>



		<?php
       
        $erreurSaisie = true;
    }
	

    if (empty($_POST["mdp"])) {
         ?> 
       <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                Veuillez renseigner votre mot de passe.
              </div>



	   <?php
        
        $erreurSaisie = true;
    }
	

 
    
    $rechercheMail;
    $emailExiste=false;

    if ($erreurSaisie == false) {   
        $email = $_POST["email"];
        // echo 'email='.$_POST["email"];
        $co = connexionBdd();
        $rechercheMail = "SELECT * FROM user WHERE email='" . $email . "' ";
        $resultat = mysqli_query($co, $rechercheMail);
        if (!$resultat) {
            printf("Error: %s\n", mysqli_error($co));
            exit();
        }

        $nbLignes = mysqli_num_rows($resultat); // Affiche le nombre de lignes de la requete
        
        if($nbLignes==0){
            $emailExiste=false;
             ?> 
  <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                Cette adresse email n'existe pas ou mot de passe est incorrect.
              </div>


		<?php
            
        }else{
            $emailExiste=true;
        }
    }

    
    
    if(($erreurSaisie==false)&&($emailExiste==true)){
        $tabResultat=mysqli_fetch_array(mysqli_query($co, $rechercheMail));
        $mdpReel=$tabResultat['passe'];
        $mdpPropose=sha1($_POST['mdp']);
        if($mdpReel==$mdpPropose){
           // echo 'Bonne combinaison email/mot de passe, vous �tes d�sormais logg� !';
//            $_SESSION['connected']=1;
//            $_SESSION['pseudo']=$tabResultat['pseudo'];
//            var_dump($_SESSION);
//            echo 'connected ='.$_SESSION['connected'];
//            header('Location: ../code/compte.php');         
            
            gamecommande($_POST['email']);
        }else{
            ?> 
        <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                Le mot de passe saisi n'est pas le bon, veuillez reessayer.
              </div>
	   <?php
            
        }
    }
} 
?>
	<section id="form"><!--form-->
	
		<div class="container">
		
			<div class="row">
			<div class="col-sm-12">
			<img src="images/dofuslogin.jpg" class="girl img-responsive" alt="" />
			<div class="col-sm-99">
					<div class="login-form"><!--login form-->
						<h2>Se Connecter</h2>
						<form method="post" action="">
							<input type="email" name="email" placeholder="Email" required/>
							<input type="password" name="mdp" placeholder="mot de passe" required/>
							<span>
								<input type="checkbox" class="checkbox"> 
								Sauvegarder mon mot de passe
							</span>
							<button type="submit" class="btn btn-block btn-success">Se connecter</button>
						</form>
						</br>
						<a href="register.php"><button type="button" class="btn btn-block btn-success">S'inscrire</button></a>
					</div><!--/login form-->
				
			</div>
				
			</div>
		</div>
		</div>
	</section><!--/form-->
	
