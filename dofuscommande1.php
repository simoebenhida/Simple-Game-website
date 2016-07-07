
<?php include "page/hautpage.php";
$r=1;
$date = date("j/n/Y"); 
if(!empty($_GET['serveur']))
{
	$serveur = $_GET['serveur'];
	$kamas = $_GET['kamas'];
	$montant = $kamas * 8;
	$r=0;
	
}

?>
<link href="css/test.css" rel="stylesheet">	
<link href="css/test1.css" rel="stylesheet">	
		<img src="images/dofuslogin1.jpg" width="1900px" height="288px">
 <div class="container">
   
 
		
			
			
    	<div class="bg">
	    	  	
			</br>
    		<div class="row">  	
			
				
			
			<?php
			include '/page/gauchepage.php';?>
				

				
				
				<div class="col-sm-9 padding-right">
						   
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

				<div class="col-sm-95">
				
				<form method='GET' action="commandedofuss.php">
						<?php
						if($r == 0)
						{?>
					<div class="box-body">
              <dl class="dl-horizontal">
                <dt>Serveur </dt>
                <dd><?php echo $_GET['serveur'];?>.</dd>
				</br>
                <dt>Kamas</dt>
                <dd><?php echo $_GET['kamas'];?> mk.</dd>
				</br>
                <dt>Montant</dt>
                <dd><?php echo $montant;?> MAD.</dd>
				</br>
                
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
									</br>
								
								
							
							<button type="submit" class="btn btn-block btn-success btn-lg">Vendre</button>
						</form>
           </div>
		   
	

		   
		   
		   
        </div>
			</div>
		
			
		
			
			</div>
			</br></br></br>
			
				
				
	<?php

	include "page/baspage.php";
	?>