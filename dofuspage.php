<?php include "page/hautpage.php";

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
				
				
				<form method='get' action="commandedofuss.php">
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
<div class='mideahya1'>
<button type="submit" class="button button-rounded button-action"><i class="fa fa-shopping-cart"></i> Vendre</button>
					</div>
					</form>
					</br>
					</div>
				
				
				
				
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
			
				
				
	<?php

	include "page/baspage.php";
	?>