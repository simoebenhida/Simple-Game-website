<div class="mod-lf-box">	
				
	  <?php
   if($_SESSION['connected'] == 1)     {?>  			
    <div class="mod-md mod-lf-box-ct">
	
        <h4>Gestion De Mon Compte</h4>
		
		
        <ul class="clearfix">
		</br>
		</p>Bonjour <strong><?php echo $_SESSION['nom'];?></p>
            <li><a href="profil.php">Mon Profil</a></li>
            
            <li><a href="mescommandes.php">Mes Commandes</a></li>
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
		</br>		<div class="login-form"><!--login form-->
						
						<form method="post" action="connection">
							<input type="email" name="email" placeholder="Email" required/>
							<input type="password" name="mdp" placeholder="mot de passe" required/>
							<span>
								<input type="checkbox" class="checkbox"> 
								Sauvegarder mon mot de passe
							</span>
							
							<button type="submit" class="button button-rounded button-action pull-right">Se connecter</button>
							
							
						
						</form>
						</br>
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
						<form method='get' action="commandeRP">
							<select id="cbrp" name ="cbrp" onchange="recalculer1();" placeholder="test" class="form-control select2" style="width: 100%;" required>
							
																		
																		<option value="11" >1580 RP</option>
																		<option value="23" >3250 RP</option>
																		<option value="38" >5725 RP</option>
																		<option value="55" >8250 RP</option>
																					
														</select>
														</br>

<div class="input-group">
                <span class="input-group-addon">MAD</span>
              <input type="number" class="form-control" id="prix" value="110" disabled="">
			 
                <span class="input-group-addon">DH</span>
              </div>
</br>
<div class='mideahya1'>
<button type="submit" class="button button-rounded button-action"><i class="fa fa-shopping-cart"></i> Acheter</button>
					</div>
					</form>
					</br>
                
								
								
									</div>