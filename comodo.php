<?php include "page/hautpage.php";
$co = connexionBdd();
$r=1;
$date = date("j/n/Y"); 
if(!empty($_GET['serveur']))
{
	$serveur = $_GET['serveur'];
	$kamas = $_GET['kamas'];
	$montant = $kamas * 6;
	$r=0;
	
}
	
if ($_SESSION['connected'] == 1)
{
	if($_POST)
	{
		if($r == 0)
		{
			$serveur = $_GET['serveur'];
	$kamas = $_GET['kamas'];
	$montant = $kamas * 6;
		}
		else
		{
			$serveur = $_POST['serveur'];
			$kamas = $_POST['kamas'];
	$montant = $kamas * 6;
	
		}
	$name = $_SESSION['nom'];
	$iduser = $_SESSION['id'];
	
	 

	if((empty($_POST['wuname'])))
	{
		
		if((empty($_POST['paypalname'])))
		{
			
			if((empty($_POST['wafaname'])))
			{
				?>
		<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                Vous devez choisir comment vous voulez etre payer.
              </div>
			  <?php
			}
		}
		
		
	}
	
	
	if(($_POST['wuname']))
		{
			if($_POST['wuphone']== NULL)
			{?>
				<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                Votre numero de telephone.
              </div>
			<?php	
			}
			else
			{
			insertintocommandedofuswu($serveur,$kamas,$montant,$_POST["npdofus"],$name,$iduser,$_POST['wuname'],$_POST['wuphone']);}
		echo '<script language="Javascript">

document.location.replace("commandes");

</script>';
			
		
		}
		else
		{
			if($_POST['paypalname'])
			{
				insertintocommandedofuspaypal($serveur,$kamas,$montant,$_POST["npdofus"],$name,$iduser,$_POST['paypalname']);
echo '<script language="Javascript">

document.location.replace("commandes");

</script>';
			}
			else
			{
				if(($_POST['wafaname']))
				{
					if($_POST['wafaphone']== NULL)
			{
				?>
				<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                Votre numero de telephone.
              </div>
			<?php	
				
			}
			else
			{
			insertintocommandedofuswafa($serveur,$kamas,$montant,$_POST["npdofus"],$name,$iduser,$_POST['wafaname'],$_POST['wafaphone']);}			
		echo '<script language="Javascript">

document.location.replace("commandes");

</script>';
				}
			}
		}
	
	
}
?>
				
 <div class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Commander</h2>    
<img src="images/dofuslogin.jpg" class="girl img-responsive" alt="" />					
					
				</div>			 		
			</div>    	
			</br>
    		<div class="row">  	
			<div class="col-sm-3">
				<div class="contact-info">
	    				<h2 class="title text-center">Compte</h2>
	    				<p>Bonjour! <?php echo $_SESSION['nom'];?></p>
	    					<a href="commandes"> Mes commandes</a></br></br>
							<a href="changepassword">Changer mon mot de passe</a>
							</br></br>
							<div class="callout callout-info">
               

                <p>Contacter notre support en bas a droite du page pour plus d'infos.(Support 24/24)</p>
              </div>
						
	    				</br></br></br></br>
					<div class="fb-page" data-href="https://www.facebook.com/magamesofficiel" data-tabs="timeline" data-width="292" data-height="242" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/magamesofficiel"><a href="https://www.facebook.com/magamesofficiel">Ma-games</a></blockquote></div></div>	</br></br></br>	
</br></br></br>		
	    				
	    			</div>
					</div>
	    		<div class="col-sm-9 padding-right">
				<h2 class="title text-center">Vendez Vos kamas</h2>
					
					
					<div class="box box-solid">
					
					
					 <div class="box-header with-border">
           

              <h3 class="box-title">Le procedure sur l'echange</h3>
            </div>
					
					
					
					<div class="box-body">
              <ul>
                <li>-Le fournisseur doit s'inscrire sur notre site.</li>
                <li>-Il faut creer une commande.</li>
                <li>-Apres la creation de commande, le fournisseur doit contacter notre support en ligne. Apres discussion, le support vous indique s'il accepte de prendre votre livraison.</li>
                <li>-Il va vous donner la position et le nom du personage pour l'echange.</li>
                <li>-Avant que vous ne donniez les kamas au personnage, il vous donnera l'adresse email de votre compte. Vous devez verifier qu'il s'agit du bon email pour eviter des arnaqueurs.</li>
                <li>-Nous allons vous payer via ce que vous avez choisis en 24H sauf weekends et jours feries.</li>
               
              </ul>
            </div>
				
				
           
           
						
						
						
					
						
</div>
				
				
				
				
                      	<div class="col-sm-97">
	    				
						
						
					
         


	    				<form method='post' action="">
						<?php
						if($r == 0)
						{?>
					<div class="box-body">
              <dl class="dl-horizontal">
                <dt>Serveur </dt>
                <dd><?php echo $_GET['serveur'];?>.</dd>
                <dt>Kamas</dt>
                <dd><?php echo $_GET['kamas'];?> mk.</dd>
                <dt>Montant</dt>
                <dd><?php echo $montant;?> MAD.</dd>
                
              </dl>
            </div>
	
						<?php
						}
						else
						{
							
							?>
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
<script>
function recalculer()
{
//déclarons trois variables temporaires
var val1=0;

// et une variable pour le total
var total1=0;
//pour les menus, le test n'est pas nécessaire
val1=parseInt(document.getElementById('kamas').value);

//calculons le total
total1=val1*6;
//plaçons-le dans le chmaps resultat
document.getElementById('montant').value=total1;
//le tour est joué  
}
</script>
		</br>									
<div class="input-group">
                <span class="input-group-addon">K</span>
                <input type="number" id="kamas" onchange="recalculer();" name="kamas" placeholder="mk" class="form-control"required >
                <span class="input-group-addon">6 MAD/M</span>
              </div>
			  	</br>
<div class="input-group">
                <span class="input-group-addon">MAD</span>
             <input type="number"  class="form-control" id="montant" name="montant" readonly="readonly" size="5;&quot;" disabled="">
                <span class="input-group-addon">DH</span>
              </div>
				
			  </br>
							
						<?php 
						}
						?>
				
				<input class="form-control" type="text" name="npdofus" placeholder="Nom de personnage Dofus" required>
				</br>
							<div class="callout callout-success">
                <h4>Vous allez recevoir votre paiement dans 24h maximum.!</h4>

                
              </div>
								</br>
								</div>
								<div class="col-sm-97">
							<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class=""><a href="#tab_1" data-toggle="tab" aria-expanded="false">Western Union</a></li>
              <li class="active"><a href="#tab_2" data-toggle="tab" aria-expanded="true">Paypal</a></li>
              <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Wafacash</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane" id="tab_1">
			  <img src="images/wu.png" class="girl img-responsive" alt="" />
			
			  <br> <br>
                <input class="form-control" name="wuname" type="text" placeholder="Nom complet">
				</br>
				 <input class="form-control" name="wuphone" type="phone" placeholder="Votre Numero de telephone">
				 </br>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane active" id="tab_2">
			  <img src="images/paypal.png" class="girl img-responsive" alt="" />
               
			   <br> <br>
                <input class="form-control" name="paypalname" type="email" placeholder="Email paypal">
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
			  <img src="images/wafacash.jpg" class="girl img-responsive" alt="" />
              
			  <br> <br>
                <input class="form-control" name="wafaname" type="text" placeholder="Nom complet" >
				</br>
				 <input class="form-control" name="wafaphone" type="phone" placeholder="Votre Numero de Telephone">
				 </br>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
							
							<button type="submit" class="btn btn-block btn-success btn-lg">Vendre</button>
						</form>
							
							
				    	</div>
						
	    			
					
					

					
					
	    		</div>
	    		 


	
				







				 
	    	</div>  
    	</div>	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
    </div>
	</br></br></br></br>
	<?php
}
else
{
	include "login1c.php";
}
	include "page/baspage.php";
	?>