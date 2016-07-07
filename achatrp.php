<?php include "page/hautpage.php";

if(isset($_POST))
{
if(!empty($_POST['cbrp']))
{
   $cbrp=$_POST['cbrp'];
$prix=$cbrp*10;
$name = $_SESSION['nom'];
$iduser = $_SESSION['id'];
	$a = uniqid();
insertintocommanderiot($cbrp,$prix,$name,$iduser,$a);
}
}

if(empty($_POST)){
	 echo '<script language="Javascript">

document.location.replace("index.php");

</script>';
}


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
        <p><?php if($cbrp == 11)
		{
			echo '1580';
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













</br>
<h2 class="title text-center">Paiement</h2>

<form method='post' action='CommandeRiotPoint'>
 <input type="hidden" name="refer" value="<?php echo $a;?>" >
<div class="btn-group" data-toggle="buttons">
             
			  <label class="btn btn-default active">
				<input type="radio" value="1" name="paiement" checked>
				<span class="glyphicon glyphicon-ok"></span><img src="images/wu.png" width="120px" height="120px" alt="">
			</label>
			
			 <label class="btn btn-default">
				<input type="radio" value="2" name="paiement">
				<span class="glyphicon glyphicon-ok"></span><img src="images/wafacash.jpg" width="120px" height="120px" alt="">
			</label>
		
			 <label class="btn btn-default">
			
				<input type="radio" value="3" name="paiement" >
				<span class="glyphicon glyphicon-ok"></span><img src="images/dofusss.jpg" width="120px" height="120px" alt="">
			</label>
           

		</div>
					<div class="main-ct-bt mt30 clearfix" id="cart_sub_total">
     <div class="fr tar">
        <p class="bold f14 pt10">Prix Du Produit: <span class="clb">
                <em class="f24"><?php echo $prix;?></em> DH</span></p> 
				</br>
				<button type="submit" class="button button-rounded button-action">Acheter</button>
   </form>
    </div>
</div>

                </div>
            </div>
           
        </div>
			</div>
		
			
		
			
			</div>
			</br></br></br>
			</div>
			</div>
				
				
	<?php

	include "page/baspage.php";
	?>