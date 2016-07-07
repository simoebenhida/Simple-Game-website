<?php include "page/hautpage.php";
$co = connexionBdd();

	if(!empty($_GET['kamas']))
{
	
	$kamas = $_GET['kamas'];
	$montant = $kamas * 6;
}
else
{
	echo '<script language="Javascript">

document.location.replace("index.php");

</script>';
}

if ($_SESSION['connected'] == 1)
{
	
	
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
				<div class="mod-md bg-f bor-c p20">
				
				
				
				
            <div class="mod-md ct-tab4 on">
                <div class="mod-md">

                    
					
					<form action="achatdofus.php" method="post">
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
					<p>Serveur :</p>
					<select id="serveur" name ="serveur" class="form-control select2" style="width: 100%;">
																	
																								<option value="Agride - FR" selected="selected">Agride - FR</option>
																							<option value="Allister - FR">Allister - FR</option>
																								
																								<option value="Amayiro - FR">Amayiro - FR</option>
																								
																								<option value="Bowisse - FR">Bowisse - FR</option>
																								<option value="Brumaire - FR">Brumaire - FR</option>
																								
																								<option value="Crocoburio - FR">Crocoburio - FR</option>
																								<option value="Danathor - FR">Danathor - FR</option>
																							
																								<option value="Djaul - FR">Djaul - FR</option>
																								<option value="Domen - FR">Domen - FR</option>
																									<option value="Farle - FR">Farle - FR</option>
																								<option value="Goultard - FR">Goultard - FR</option>
																								<option value="Hecate - FR">Hecate - FR</option>
																								<option value="Hel Munster - FR">Hel Munster - FR</option>
																								<option value="Helsephine - FR">Helsephine - FR</option>
																								<option value="Hyrkul - FR">Hyrkul - FR</option>
																								<option value="Jiva - FR">Jiva - FR</option>
																								<option value="Kuri - FR">Kuri - FR</option>
																								<option value="Li Crounch - FR">Li Crounch - FR</option>
																								<option value="Lily - FR">Lily - FR</option>
																								<option value="Maimane - FR">Maimane - FR</option>
																								<option value="Many - FR">Many - FR</option>
																								<option value="Menalt - FR">Menalt - FR</option>
																								<option value="Mylaise(Mily) - FR">Mylaise(Mily) - FR</option>
																								<option value="Otomai - FR">Otomai - FR</option>
																							<option value="Pouchecot - FR">Pouchecot - FR</option>
																								<option value="Raval - FR">Raval - FR</option>
																								<option value="Ruliet(Ulette) - FR">Ruliet(Ulette) - FR</option>
																								<option value="Rykke-Errel - FR">Rykke-Errel - FR</option>
																								<option value="Silouate - FR">Silouate - FR</option>
																								<option value="Silvosse - FR">Silvosse - FR</option>
																								<option value="Sumens - FR">Sumens - FR</option>
																								<option value="Vil-Smisse - FR">Vil-Smisse - FR</option>
																								
														</select>
                </dt>
           
        </dl>
		
    </td>
    <td>
	
	<p>
	Nous contacter <strong><a>Support En ligne </a></strong> 
	</br>pour nous livrer votre offre.</p>
        </br>
        <input class="txt w200" name="npdofus" type="text" placeholder="Nom de personnage Dofus" required>
		</br>
			
		<input type="hidden" name="kamas" value="<?php echo $kamas;?>" >
							<input type="hidden" name="montant" value="<?php echo $montant;?>" >
							
		
           
          
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
				</br></br>
<button type="submit" class="button button-rounded button-action"><i class="fa fa-shopping-cart"></i> Vendre</button>
    </div>
</div>
</form>
					
					

                </div>
            </div>
           
        </div>
			</div>
		
			
		
			
			</div>
		</div>	
			
				
				
	<?php
}
else
{
	echo '<script language="Javascript">

document.location.replace("nouveaux-Dofus-commande-' .$kamas.'.html ");

</script>';
	
 

}
	include "page/baspage.php";
	?>