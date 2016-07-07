<?php include "page/hautpage.php";

if ($_SESSION['connected'] == 1)
{
?>



	<section id="form"><!--form-->
	
<img src="images/steam.jpg" width="1349px" height="300px">	
		<div class="container">
	

			<div class="row">
			
			
			
			<div class="col-sm-99">
			<?php
			
			if($_POST){
$co = connexionBdd();
$reqConducteurr = "SELECT * FROM user WHERE idUser='" .$_SESSION['id']. "' ";
$sqlqueryconducteurr = mysqli_query($co, $reqConducteurr);
$tabUser = lectureTableauPhpResultatRequete($sqlqueryconducteurr);
$passe = $tabUser['passe'][0];




    if ((($_POST['mdp']) != ($_POST['mdp2']))) {
       
        ?>
	<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
               La verification de mot de passe ne correspond pas au mot de passe precedemment saisi.
              </div>
	<?php
		
    }
	else
	{
	if(sha1($_POST["anmdp"]) != $passe)
	{
	?>
	<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
               votre ancien mot de passe est incorect.
              </div>
	<?php
	
		
	}
	else
{
	$pa = sha1($_POST['mdp']);
$reqConducteur5="UPDATE user SET passe='" .$pa. "' WHERE idUser ='" .$_SESSION['id']. "' ";
$sqlqueryconducteur = mysqli_query($co, $reqConducteur5);
?>
<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                Vous avez bien modifier votre mot de passe.
              </div>
			  <?php
}
}
}


			
			
			?>
					<div class="login-form"><!--login form-->
					
					<form method='post'action=''>
					<input class="form-control" type="password" name="anmdp" placeholder="Ancien mot de passe" required>
					</br>
					<input class="form-control" type="password" name="mdp" placeholder="Noveau mot de passe" required>
					</br>
					<input class="form-control" type="password" name="mdp2" placeholder="Resaisir votre mot de passe" required>
					</br>
					
</br>
<div class='mideahya1'>
<button type="submit" class="button button-rounded button-action"> Changer</button>
					</div>
					</form>
						</div><!--/login form-->
				
			</div>
				
			
		</div>
		</div>
	</section><!--/form-->
	
<?php
}
else
{
	include "connection";
}
include "page/baspage.php";?>