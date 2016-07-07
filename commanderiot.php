
<?php include "page/hautpage.php";
$co = connexionBdd();
if(!empty($_GET['cbrp'])){
$cbrp = $_GET['cbrp'];
	$prix = $cbrp*10;
	
}

else
{
	echo '<script language="Javascript">

document.location.replace("home");

</script>';
}
if ($_SESSION['connected'] == 1)
{
	
$name = $_SESSION['nom'];
    $iduser = $_SESSION['id'];






?>
<link href="css/test.css" rel="stylesheet">	
<link href="css/test1.css" rel="stylesheet">
<img src="images/lol.png" width="1349px" height="300px">				
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

                    
					
					<form action="achatrp.php" method="post" >
<div class="main-ct-md p15 bor-3-c bg-f">
<table border="0" width="100%">
<tbody><tr class="bor-b-c">
    <th class="wper35">Produits</th>
    <th>Informations de livraison</th>
    <th class="wper15">Quantite</th>
    <th class="wper15">Prix</th>
</tr>
    							<input type="hidden" name="cbrp" value="<?php echo $cbrp;?>" >
							<input type="hidden" name="prix" value="<?php echo $prix;?>" >

<tr class="bor-b-c-dash" id="goods_12850">
    <td>
        <dl>
            <dt>
                    <img src="images/rp.png" width="120px" height="120px">
                </dt>
           
        </dl>
    </td>
    <td>
	<p>
		
	Nous contacter <strong><a>Support En ligne </a></strong> 
        
           </p>
          
        </div>
    </td>
    <td class="clc2">
        <p>
		
		
		<?php if($cbrp == 11)
		{
			echo '1580 ';
		}
		else{
		if($cbrp == 23)
		{
			echo '3250 ';
		}else{
			if($cbrp == 38)
			{
				echo '5725 ';
			}
			else
			{
				if($cbrp == 55)
				{
					echo '8250 ';
				}
			}
		}
		} ?> RP</p>  </td>
    <td><table width="100%">
            <tbody><tr>
                <td class="cly" id="goods_12850_price"><?php echo $prix;?> DH</td>
                
            </tr>
        </tbody></table>
    </td>
</tr>

</tbody></table>
</div>
<div class="main-ct-bt mt30 clearfix" id="cart_sub_total">
     <div class="fr tar">
        <p class="bold f14 pt10">Prix Du Produit: <span class="clb">
                <em class="f24"><?php echo $prix;?></em> DH</span></p> 
				</br>
<button type="submit" class="button button-rounded button-action">Acheter</button>
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

document.location.replace("seconnecter-'.$cbrp.'.html");

</script>';
	
 

}
	include "page/baspage.php";
	?>