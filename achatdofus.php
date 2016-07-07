
<?php include "page/hautpage.php";
//testttttt
$co = connexionBdd();
if(empty($_POST))
{
	echo '<script language="Javascript">

document.location.replace("index.php");

</script>';
}
if ($_SESSION['connected'] == 1)
{
	
	$name = $_SESSION['nom'];
    $iduser = $_SESSION['id'];
	$serveur = $_POST['serveur'];
	$kamas = $_POST['kamas'];
	$montant = $_POST['montant'];
	$npdofus = $_POST['npdofus'];
	
	
	$a= uniqid();

	
?>
	
<img src="images/dofuslogin1.jpg" width="1349px" height="288px">	
 <div class="container">

   

		
			
			
    	<div class="bg">
	    	  	
			</br>
    		<div class="row">  	
			
				
			
			<?php
			include '/page/gauchepage.php';?>
				

				
				
				<div class="col-sm-9 padding-right">
				<div class="mod-md bg-f bor-c p20">
            <div class="mod-md ct-tab4 on">
                <div class="mod-md">

                    
					
					
<div class="main-ct-md p15 bor-3-c bg-f">
<table border="0" width="100%">
<tbody><tr class="bor-b-c">
    <th class="wper35">Produits</th>
    <th>Informations de livraison
	</th>
    <th class="wper15">Quantite</th>
    <th class="wper15">Prix</th>
</tr>
    

<tr class="bor-b-c-dash" id="goods_12850">
    <td>
        <dl>
            <dt>
                    <img src="images/dofusimg.jpg" width="120px" height="120px">
                </dt>
           
        </dl>
		<p>Serveur : <?php echo $serveur;?></p>
    </td>
    <td>
	<p>
	Nom personnage : <strong><?php echo $npdofus;?></strong></br>
	Nous contacter <strong><a>Support En ligne </a></strong> 
	</br>pour nous livrer votre offre.
        
        
           </p>
          
        </div>
    </td>
    <td class="clc2">
        <p><?php echo $kamas;?>mk</p>  </td>
    <td><table width="100%">
            <tbody><tr>
                <td class="cly" id="goods_12850_price"><?php echo $montant;?>DH</td>
                
            </tr>
        </tbody></table>
    </td>
</tr>

</tbody></table>
</div>
<div class="main-ct-bt mt30 clearfix" id="cart_sub_total">
     <div class="fr tar">
        <p class="bold f14 pt10">Prix Du Produit: <span class="clb">
                <em class="f24"><?php echo $montant;?></em> DH</span></p> 
   
    </div>
</div>

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
<form action="achatdofus1.php" method="post" >
 <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class=""><a href="#tab_1" data-toggle="tab" aria-expanded="false">Western Union</a></li>
              <li class="active"><a href="#tab_2" data-toggle="tab" aria-expanded="true">Paypal</a></li>
              <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Wafacash</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane" id="tab_1">
			  <img src="images/wu.png" class="girl img-responsive" width="200px" height="200px" alt="" />
			
			  
			    </p>Nous allons vous contacter avec un sms de code Western Union pour aller tirer votre argent dans la plus proche agence Western Union.</p>
             <br>
                <input class="txt w300 mr10" name="wuname" type="text" placeholder="Nom complet">
				</br>
		
				 <input class="txt w300 mr10" name="wuphone" type="text" placeholder="Votre Numero de telephone">
				 <input type="hidden" name="refer" value="<?php echo $a;?>" >
				 <input type="hidden" name="npdofus" value="<?php echo $npdofus;?>" >
				 <input type="hidden" name="kamas" value="<?php echo $kamas;?>" >
							<input type="hidden" name="montant" value="<?php echo $montant;?>" >
							<input type="hidden" name="serveur" value="<?php echo $serveur;?>" >
				 </br>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane active" id="tab_2">
			  <img src="images/paypal.png" class="girl img-responsive" width="200px" height="200px" alt="" />
               
			   <br> <br>
			  
                <input class="txt w300 mr10" name="paypalname" type="email" placeholder="Email paypal">
				<input type="hidden" name="kamas" value="<?php echo $kamas;?>" >
				 <input type="hidden" name="npdofus" value="<?php echo $npdofus;?>" >
				
				<input type="hidden" name="refer" value="<?php echo $a;?>" >
							<input type="hidden" name="montant" value="<?php echo $montant;?>" >
							<input type="hidden" name="serveur" value="<?php echo $serveur;?>" >
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
			  <img src="images/wafacash.jpg" class="girl img-responsive" alt="" />
              
			  </br>
			  </p>Nous allons vous contacter avec un sms de code wafacash pour aller tirer votre argent dans la plus proche agence wafacash.</p>
                <br>
				
				<input class="txt w300 mr10" name="wafaname" type="text" placeholder="Nom complet" >
				</br>
				<input type="hidden" name="kamas" value="<?php echo $kamas;?>" >
				 <input type="hidden" name="npdofus" value="<?php echo $npdofus;?>" >
				
				<input type="hidden" name="refer" value="<?php echo $a;?>" >
							<input type="hidden" name="montant" value="<?php echo $montant;?>" >
							<input type="hidden" name="serveur" value="<?php echo $serveur;?>" >
				 <input class="txt w300 mr10" name="wafaphone" type="text" placeholder="Votre Numero de Telephone">
				 </br>
				 
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>



<button type="submit" class="button button-rounded button-action">Vendre</button>








</form>
					
					

                </div>
            </div>
           
        </div>
			</div>
		
			</div>
		</div>
			
			</div>
			</br></br></br>
			
				
				
	<?php
}
else
{
	echo '<script language="Javascript">

document.location.replace("index.php");

</script>';
}
	include "page/baspage.php";
	?>