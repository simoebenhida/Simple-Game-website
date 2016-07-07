<?php include "page/hautpage.php";


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












if ($_SESSION['connected'] == 1)
{
?>
				
 <div class="container">
    	<div class="bg">
	    	  	
			</br>
    		<div class="row">  	
			<div class="col-sm-12">    			   			
					
<img src="images/dofuslogin.jpg" class="girl img-responsive" alt="" />					
					</br></br>
				</div>	
				
			<div class="col-sm-3">
				<div class="contact-info">
	    				<h2 class="title text-center">Compte</h2>
	    				<p>Bonjour! <?php echo $_SESSION['nom'];?></p>
	    					<a href="mescommandes.php"> Mes commandes</a></br></br>
							<a>Changer mon mot de passe</a>
							</br></br>
							<div class="callout callout-info">
               

                <p>Contacter notre support en bas a droite du page pour plus d'infos.</p>
              </div>
	</div>
					
					<div class="contact-info"><!--login form-->
						<h2 class="title text-center">Vendre Kamas</h2>
<form method='get' action="commandedofus.php">
							<select id="serveur" name ="serveur" class="form-control select2" style="width: 100%;">
																		<option value="Aermyne - UK" selected="selected">Aermyne - UK</option>
																								<option value="Agride - FR">Agride - FR</option>
																								<option value="Aguabrial - ES">Aguabrial - ES</option>
																								<option value="Allister - FR">Allister - FR</option>
																								<option value="Alma - ES">Alma - ES</option>
																								<option value="Amayiro - FR">Amayiro - FR</option>
																								<option value="Bolgrot - ES">Bolgrot - ES</option>
																								<option value="Bowisse - FR">Bowisse - FR</option>
																								<option value="Brumaire - FR">Brumaire - FR</option>
																								<option value="Buhorado - ES">Buhorado - ES</option>
																								<option value="Crocoburio - FR">Crocoburio - FR</option>
																								<option value="Danathor - FR">Danathor - FR</option>
																								<option value="Dark Vlad - NL">Dark Vlad - NL</option>
																								<option value="Darkness - ES">Darkness - ES</option>
																								<option value="Djaul - FR">Djaul - FR</option>
																								<option value="Domen - FR">Domen - FR</option>
																								<option value="Edasse - ES">Edasse - ES</option>
																								<option value="Eratz - ES">Eratz - ES</option>
																								<option value="Ereziah - IT">Ereziah - IT</option>
																								<option value="Farle - FR">Farle - FR</option>
																								<option value="Goultard - FR">Goultard - FR</option>
																								<option value="Hecate - FR">Hecate - FR</option>
																								<option value="Hel Munster - FR">Hel Munster - FR</option>
																								<option value="Helioboros - BR">Helioboros - BR</option>
																								<option value="Helsephine - FR">Helsephine - FR</option>
																								<option value="Henual - ES">Henual - ES</option>
																								<option value="Hyrkul - FR">Hyrkul - FR</option>
																								<option value="Jiva - FR">Jiva - FR</option>
																								<option value="Kuri - FR">Kuri - FR</option>
																								<option value="Li Crounch - FR">Li Crounch - FR</option>
																								<option value="Lily - FR">Lily - FR</option>
																								<option value="Maimane - FR">Maimane - FR</option>
																								<option value="Many - FR">Many - FR</option>
																								<option value="Menalt - FR">Menalt - FR</option>
																								<option value="Mylaise(Mily) - FR">Mylaise(Mily) - FR</option>
																								<option value="Nehra - DE">Nehra - DE</option>
																								<option value="Nomarow - RU">Nomarow - RU</option>
																								<option value="Nomekop - ES">Nomekop - ES</option>
																								<option value="Ombre(Shadow) - EU">Ombre(Shadow) - EU</option>
																								<option value="Oto Mustam - US">Oto Mustam - US</option>
																								<option value="Otomai - FR">Otomai - FR</option>
																								<option value="Padgref - RU">Padgref - RU</option>
																								<option value="Pouchecot - FR">Pouchecot - FR</option>
																								<option value="Raval - FR">Raval - FR</option>
																								<option value="Rosal - US">Rosal - US</option>
																								<option value="Ruliet(Ulette) - FR">Ruliet(Ulette) - FR</option>
																								<option value="Rushu - US">Rushu - US</option>
																								<option value="Rykke-Errel - FR">Rykke-Errel - FR</option>
																								<option value="Shika - UK">Shika - UK</option>
																								<option value="Silouate - FR">Silouate - FR</option>
																								<option value="Silvosse - FR">Silvosse - FR</option>
																								<option value="Solar - US">Solar - US</option>
																								<option value="Spiritia - BR">Spiritia - BR</option>
																								<option value="Sumens - FR">Sumens - FR</option>
																								<option value="Tinieblas - ES">Tinieblas - ES</option>
																								<option value="Vil-Smisse - FR">Vil-Smisse - FR</option>
																								<option value="Zatoishwan - UK">Zatoishwan - UK</option>
														</select>
														</br>
<div class="input-group">
                <span class="input-group-addon">K</span>
                <input type="number" id="kamas" onchange="recalculer();" name="kamas" placeholder="mk" class="form-control" required>
                <span class="input-group-addon">6 MAD/M</span>
              </div>
			  	</br>
<div class="input-group">
                <span class="input-group-addon">MAD</span>
             <input type="number" class="form-control" id="montant" disabled="">
			 
                <span class="input-group-addon">DH</span>
              </div>
</br>
					<button type="submit" class="btn btn-block btn-success">Vendre</button>
					</form>
					</div>
					</br></br></br></br>
					<div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="292" data-height="242" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>
								</br></br></br>
									</div>
				

				
				
				<div class="col-sm-9 padding-right">
				<div class="col-sm-99">
						
	    			  <form method='post'action=''>
					<input class="form-control" type="password" name="anmdp" placeholder="Ancien mot de passe" required>
					</br>
					<input class="form-control" type="password" name="mdp" placeholder="Noveau mot de passe" required>
					</br>
					<input class="form-control" type="password" name="mdp2" placeholder="Resaisir votre mot de passe" required>
					</br>
					<button type="submit" class="btn btn-block btn-success btn-lg">Changer</button>
					</form>
					</div>
			</div>
		
			
		
			
			</div>
			
			</div></div>
				
				
	<?php
}
else
{
	include "login.php";
}
	include "page/baspage.php";
	?>