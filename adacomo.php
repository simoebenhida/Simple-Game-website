 <?php
 include "page/hautpage.php";
 $co = connexionBdd();
 $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perpage = isset($_GET['per-page']) ? (int)$_GET['per-page'] : 5;
$start =($page>1) ? ($page * $perpage)- $perpage : 0;

 $page1 = isset($_GET['page1']) ? (int)$_GET['page1'] : 1;
$perpage1 = isset($_GET['per-page1']) ? (int)$_GET['per-page1'] : 5;
$start1 =($page1>1) ? ($page1 * $perpage1)- $perpage1 : 0;
if(!empty($_POST['etat']))
 {
	 $reqConducteur5="UPDATE commandedofus SET etat='" .$_POST['etat']. "' WHERE idcommande ='" .$_POST['idcommande']. "' ";
$sqlqueryconducteur = mysqli_query($co, $reqConducteur5);
 }
 if(!empty($_POST['etat1']))
 {
	 $reqConducteurr5="UPDATE commanderiot SET etat='" .$_POST['etat1']. "' WHERE idcommande ='" .$_POST['idcommande1']. "' ";
$sqlqueryconducteurr = mysqli_query($co, $reqConducteurr5);
 }
 if ($_SESSION['connected'] == 1)
{

?>
 <div class="container">
    	<div class="bg">
	    	<div class="row">    		
	    			 		
			</div>    	
			</br>
			
    		<div class="row">  	
			
			
			
			
			<div class="mod-lf-box">	
				
	  <?php
   if($_SESSION['connected'] == 1)     {?>  			
    <div class="mod-md mod-lf-box-ct">
	
        <h4>Gestion De Mon Compte</h4>
		
		
        <ul class="clearfix">
		</br>
		</p>Bonjour <strong><?php echo $_SESSION['nom'];?></p>
            <li><a href="profil.php">Mon Profil</a></li>
            
            <li class="on"><a href="mescommandes.php">Mes Commandes</a></li>
        </ul>
    </div>

					
                    </br></br>
					<script type="text/javascript">Tawk_API.onStatusChange = function (status){if(status === 'online'){document.getElementById('status').innerHTML = '<a href="#" onclick="toggleChat()">Online - Click to chat</a>';}else if(status === 'away'){document.getElementById('status').innerHTML = 'We are currently away';}else if(status === 'offline'){document.getElementById('status').innerHTML = 'Live chat is Offline';}};
</script>
                    <dl>
                        <dt class="icon-kf"></dt>
                        <dd>
                                                       Veuillez contacter Notre <a class="clb bold" href="" onclick="toggleChat()" target="_blank">Support En Ligne</a>, Pour pus d'informations. </dd>
                    </dl>
               <?php
   }
   else{
	   ?>
	    <div class="mod-md mod-lf-box-ct">
        
        <h4>Se connecter</h4>
       </div>
				<div class="login-form"><!--login form-->
						
						<form method="post" action="login.php">
							<input type="email" name="email" placeholder="Email" required/>
							<input type="password" name="mdp" placeholder="mot de passe" required/>
							<span>
								<input type="checkbox" class="checkbox"> 
								Sauvegarder mon mot de passe
							</span>
							<div class="botton">
							<button type="submit" class="button button-rounded button-action">Se connecter</button>
							</div>
							<div class="botton1">
						<a href="register.php"><button type="button" class="btn btn-block btn-success">S'inscrire</button></a>
						</div>
						</form>
						
						</br>
					</div><!--/login form-->
					<?php
   }?>
				
				
					</br></br>
					</br>
					 <div class="mod-md mod-lf-box-ct">
        
        <h4>Vendre Kamas</h4>
       
    </div>
	<div class='mideahya'>
	 <img src="images/dofusimg.jpg" width="120px" height="120px">
	 </div>
						</br>
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
					 <div class="mod-md mod-lf-box-ct">
        
        <h4>Achete RP(Riot Point)</h4>
       
    </div>
	<div class='mideahya'>
	 <img src="images/rp.png" width="120px" height="120px">
	 </div>
			</br>					
						<form method='get' action="commanderiot.php">
							<select id="cbrp" name ="cbrp" onchange="recalculer1();" placeholder="test" class="form-control select2" style="width: 100%;" required>
							
																		
																		<option value="8" >1580 RP</option>
																		<option value="15" >3250 RP</option>
																		<option value="35" >5725 RP</option>
																		<option value="55" >8250 RP</option>
																					
														</select>
														</br>

<div class="input-group">
                <span class="input-group-addon">MAD</span>
              <input type="number" class="form-control" id="prix" value="80" disabled="">
			 
                <span class="input-group-addon">DH</span>
              </div>
</br>
<div class='mideahya1'>
<button type="submit" class="button button-rounded button-action"><i class="fa fa-shopping-cart"></i> Acheter</button>
					</div>
					</form>
					</br>
                
								
								
									</div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
					<?php
										$requeteTextt = "SELECT * FROM commandedofus";
	$requeteText = "SELECT * FROM commandedofus ORDER BY idcommande DESC LIMIT {$start}, {$perpage}";
$reqSql = mysqli_query($co, $requeteText);
$reqSqll = mysqli_query($co, $requeteTextt);
	
					
$nbcommande = mysqli_num_rows($reqSqll);
$tab = lectureTableauPhpResultatRequete($reqSql);

if($page>1)
{
	$z=$nbcommande-($perpage * ($page -1));
}
else
{
$z=$nbcommande;	
}
if($z>$perpage)
{
	$x=$perpage;
}
else
{
	$x=$z;
}

?>
<div class="col-sm-9 padding-right">
				<div class="mod-md bg-f bor-c p20">
<div class="mod-md ct-tab4 on">
                <div class="mod-md">

             
                        <h2 class="title text-center">Dofus</h2>
                        <div class="mod-md mod-md10 clearfix">
                           
						   
						   
						   
						    <div class="col-xs-12">
          <div class="box">
           
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
				 <th>Code</th>
                  <th>Paiement</th>
                  <th>Personnage</th>
				   <th>Serveur</th>
                  <th>Date</th>
                 <th>Status</th>
				  <th>Nombre de kamas</th>
                  <th>Prix total</th>
				  <th>Support</th>
                </tr>
				<?php
				 for ($i = 0; $i<$x; $i++) {				

$idcommande = $tab['idcommande'][$i];
	
				  	$wafaname = $tab['wafaname'][$i];
				$wuname = $tab['wuname'][$i];
				$paypalname = $tab['paypalname'][$i];
				$serveur = $tab['serveur'][$i];
				$etat = $tab['etat'][$i];
			 $a = $tab['refer'][$i];
				$date = $tab['date'][$i];
				$npdofus = $tab['npdofus'][$i];
				$kamas = $tab['kamas'][$i];
				$montant = $tab['montant'][$i];
				?>
                <tr>
				 <td><?php echo $a;?></td>
                  <td><?php
				  
				  if($wafaname != NULL)
				  {
				  echo 'wafacash';
				  }
				  else{
					  if($paypalname != NULL)
					  {
						  echo 'Paypal';
						  }
				  else{
					  if($wuname != NULL)
					  {
					  echo 'WESTER UNION';
					  }
					  }
				  }
				  ?>
				  </td>
				  <td><?php echo $npdofus;?></td>
                  <td><?php echo $serveur;?></td>
				  <td><?php echo $date;?></td>
				  <td>
				<form method='post' action="">
							<select name ="etat" class="form-control select2" style="width: 100%;">
																		
																		<option value="0" selected="selected">en traitement</option>
																		<option value="2">Annuler</option>
																		<option value="1" >Accepter</option>
																	</select>
																		 <input type="hidden" name="idcommande" value=<?php echo $idcommande;?> class="form-control" >
				  <button type="submit" class="btn btn-block btn-success btn-lg">Changer</button>
				  </form>
				  </td>
 <!--Start of Tawk.to Status Code-->
<script type="text/javascript">Tawk_API.onStatusChange = function (status){if(status === 'online'){document.getElementById('status').innerHTML = '<a href="#" onclick="toggleChat()">Online - Click to chat</a>';}else if(status === 'away'){document.getElementById('status').innerHTML = 'We are currently away';}else if(status === 'offline'){document.getElementById('status').innerHTML = 'Live chat is Offline';}};
</script>
<!--End of Tawk.to Status Code -->
                  <td><?php echo $kamas;?> mk</td>
				  <td><?php echo $montant;?> DH</td>
				  <td><a href="" onclick="toggleChat()">Support en ligne</a></td>
                </tr>
               <?php
				 }?>
				
							
							
				 
              </tbody></table>
			  
<div class="pagination-area">
							<ul class="pagination">
							
							
							<?php
							if($nbcommande > $perpage)
							{
				$pages = ceil($nbcommande / $perpage);
				for($i=1;$i<=$pages;$i++)
		{
		
		
			if($page == $i)
			{?>
               <li><a class="active"><?php echo "$i"; ?></a></li><?php
		}
		else
		{?>

		<li><a href="mescommandes.php?page=<?php echo "$i";?>&page1=<?php echo "$page1";?>" >
		
		<?php
                echo "$i"; ?></a></li>
				<?php }?>
			<?php
		}
							}
		?>
		</div>
								
							</ul>
						</div>			  
			  
            </div>

 


            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
						   
						   
						   
						   
						   
                        </div>
						
						
						
						
						
						
                        <div class="mod-md mod-md10 clearfix">
                           
						   <?php
						   
$requete = "SELECT * FROM commanderiot";
	$requetee = "SELECT * FROM commanderiot ORDER BY idcommande DESC LIMIT {$start1}, {$perpage1}";
$reqSql = mysqli_query($co, $requetee);
$reqSqll = mysqli_query($co, $requete);
$nb = mysqli_num_rows($reqSqll);
$tabt = lectureTableauPhpResultatRequete($reqSql);

if($page1>1)
{
	$z1=$nb-($perpage1 * ($page1 -1));
}
else
{
$z1=$nb;	
}
if($z1>$perpage1)
{
	$x1=$perpage1;
}
else
{
	$x1=$z1;
}

						   
						   ?>
						   <h2 class="title text-center">Riot Point</h2>
						   
						    <div class="col-xs-12">
          <div class="box">
           
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
				 <th>Code</th>
                  
                 <th>Date</th>
				   <th>Status</th>
				  <th>RP</th>
                  <th>Prix</th>
				  <th>Support</th>
                </tr>
				<?php
				 for ($i = 0; $i<$x1 ; $i++) {				

$idcommande = $tab['idcommande'][$i];
				$cbrp = $tabt['cbrp'][$i];
				$etat = $tabt['etat'][$i];
			 $a = $tabt['refer'][$i];
				$date = $tabt['date'][$i];
				$prix = $tabt['prix'][$i];
				
				
				
				?>
                <tr>
				 <td><?php echo $a;?></td>
               
				  
				  <td><?php echo $date;?></td>
                 
				  <td>
				<form method='post' action="">
							<select name ="etat1" class="form-control select2" style="width: 100%;">
																		
																		<option value="0" selected="selected">en traitement</option>
																		<option value="2">Annuler</option>
																		<option value="1" >Accepter</option>
																	</select>
																		 <input type="hidden" name="idcommande1" value=<?php echo $idcommande;?> class="form-control" >
				  <button type="submit" class="btn btn-block btn-success btn-lg">Changer</button>
				  </form>
				  </td>
				 
 <!--Start of Tawk.to Status Code-->
<script type="text/javascript">Tawk_API.onStatusChange = function (status){if(status === 'online'){document.getElementById('status').innerHTML = '<a href="#" onclick="toggleChat()">Online - Click to chat</a>';}else if(status === 'away'){document.getElementById('status').innerHTML = 'We are currently away';}else if(status === 'offline'){document.getElementById('status').innerHTML = 'Live chat is Offline';}};
</script>
<!--End of Tawk.to Status Code -->
                  <td><?php if($cbrp == 8)
		{
			echo '1580 ';
		}
		else{
		if($cbrp == 15)
		{
			echo '3250 ';
		}else{
			if($cbrp == 35)
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
		}?> RP</td>
				  <td><?php echo $prix;?> DH</td>
				  <td><a href="" onclick="toggleChat()">Support en ligne</a></td>
                </tr>
               <?php
				 }
				 ?>
              </tbody></table>
			  <div class="pagination-area">
							<ul class="pagination">
							
							
							<?php
							if($nb > $perpage1)
							{
				$pages1 = ceil($nb / $perpage1);
				for($i=1;$i<=$pages1;$i++)
		{
		
		
			if($page1 == $i)
			{?>
               <li><a class="active"><?php echo "$i"; ?></a></li><?php
		}
		else
		{?>

		<li><a href="mescommandes.php?page1=<?php echo "$i";?>&page=<?php echo "$page";?>" >
		
		<?php
                echo "$i"; ?></a></li>
				<?php }?>
			<?php
		}
							}
		?>
		</div>
			  
			  
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
						   
						   
						   
						   
						   
                        </div>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
</div></div>
</div></div>
	    		
	    		   			
	    	</div>  
    	</div>	
    </div>
	</br></br></br></br>
	<?php
	}
else
{
	echo '<script language="Javascript">

document.location.replace("loginorregister.php?serveur='.$serveur.'&kamas=' .$kamas.' ");

</script>';
	
 

}

	
	
	
	
	
	include "page/baspage.php";?>