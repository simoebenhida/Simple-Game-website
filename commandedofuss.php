<?php include "page/hautpage.php";
$co = connexionBdd();
$serveur = $_GET['serveur'];
	$kamas = $_GET['kamas'];
	$montant = $kamas * 6;
	if(!empty($_GET['serveur']))
{
	$serveur = $_GET['serveur'];
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
					<p>Serveur : <?php echo $serveur;?></p>
                </dt>
           
        </dl>
		
    </td>
    <td>
	
	<p>
	Nous contacter <strong><a>Support En ligne </a></strong> 
	</br>pour nous livrer votre offre.</p>
        </br>
        <input class="txt w200" name="npdofus" type="text" placeholder="Nom de personnage Dofus" required>
		<input type="hidden" name="kamas" value="<?php echo $kamas;?>" >
							<input type="hidden" name="montant" value="<?php echo $montant;?>" >
							<input type="hidden" name="serveur" value="<?php echo $serveur;?>" >
		
           
          
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
			
				</div>
	<?php
}
else
{
	echo '<script language="Javascript">

document.location.replace("loginorregister.php?serveur='.$serveur.'&kamas=' .$kamas.' ");

</script>';
	
 

}
	include "page/baspage.php";
	?>