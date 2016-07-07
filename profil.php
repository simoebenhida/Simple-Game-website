
<?php include "page/hautpage.php";
$co = connexionBdd();
?>
<link href="css/test.css" rel="stylesheet">	
<link href="css/test1.css" rel="stylesheet">				
 <div class="container">
    	<div class="bg">
	    	  	
			</br>
    		<div class="row">  	
			
				
				
				
				
				
				
				<div class="mod-lf-box">	
				
	  <?php
   if($_SESSION['connected'] == 1)     {
   ?>  			
    <div class="mod-md mod-lf-box-ct">
	
        <h4>Gestion De Mon Compte</h4>
		
		
        <ul class="clearfix">
		</br>
		</p>Bonjour <strong><?php echo $_SESSION['nom'];?></p>
            <li class="on"><a href="profil.php">Mon Profil</a></li>
            
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
				
				
				
				
				
				
				
				
				

				
				
				<div class="col-sm-9 padding-right">
				<div class="mod-md bg-f bor-c p20">
				
				<?php
				
				if ($_POST) {
    
    if (!empty($_POST["name"])) {	
        
        	$reqConducteur5="UPDATE user SET nom='" .$_POST['name']. "' where iduser='" .$_SESSION['id']. "'";
$sqlqueryconducteur = mysqli_query($co, $reqConducteur5);



    }
	 if (!empty($_POST["prenom"])) {	
        
        	$reqConducteur5="UPDATE user SET prenom='" .$_POST['prenom']. "' where iduser='" .$_SESSION['id']. "'";
$sqlqueryconducteur = mysqli_query($co, $reqConducteur5);
    }
	if (!empty($_POST["mobile"])) {	
        
        	$reqConducteur5="UPDATE user SET mobile='" .$_POST['mobile']. "' where iduser='" .$_SESSION['id']. "'";
$sqlqueryconducteur = mysqli_query($co, $reqConducteur5);



    }
	if($_POST['genre'] == 0)
	{
		$genre = 'masculin';
		
		$reqConducteur5="UPDATE user SET genre='" .$genre. "' where iduser='" .$_SESSION['id']. "'";
$sqlqueryconducteur = mysqli_query($co, $reqConducteur5);
	}
	if($_POST['genre'] == 1)
	{
		$genre = 'feminin';
		$reqConducteur5="UPDATE user SET genre='" .$genre. "' where iduser='" .$_SESSION['id']. "'";
$sqlqueryconducteur = mysqli_query($co, $reqConducteur5);
	}
	

	if(!empty($_POST['year']))
	{
		$reqConducteur5="UPDATE user SET year='" .$_POST['year']. "' where iduser='" .$_SESSION['id']. "'";
$sqlqueryconducteur = mysqli_query($co, $reqConducteur5);
	}
	
	
	if(!empty($_POST['month']))
	{
		$month =$_POST['month'];
		
		$reqConducteur5="UPDATE user SET month='" .$month. "' where iduser='" .$_SESSION['id']. "'";
$sqlqueryconducteur = mysqli_query($co, $reqConducteur5);
		}
	
	if(!empty($_POST['day']))
	{
		
		
		$reqConducteur5="UPDATE user SET day='" .$_POST['day']. "' where iduser='" .$_SESSION['id']. "'";
$sqlqueryconducteur = mysqli_query($co, $reqConducteur5);
		
	}
if(!empty($_POST['modecontact']))
	{
		
		$reqConducteur5="UPDATE user SET modecontact='" .$_POST['modecontact']. "' where iduser='" .$_SESSION['id']. "'";
$sqlqueryconducteur = mysqli_query($co, $reqConducteur5);
		
	}
if(!empty($_POST['contactname']))
	{
		
		$reqConducteur5="UPDATE user SET contactname='" .$_POST['contactname']. "' where iduser='" .$_SESSION['id']. "'";
$sqlqueryconducteur = mysqli_query($co, $reqConducteur5);
		
	}
    
    if(!empty($_POST['pays']))
	{
		
		$reqConducteur5="UPDATE user SET pays='" .$_POST['pays']. "' where iduser='" .$_SESSION['id']. "'";
$sqlqueryconducteur = mysqli_query($co, $reqConducteur5);
		
	}
	if(!empty($_POST['ville']))
	{
		
		$reqConducteur5="UPDATE user SET ville='" .$_POST['ville']. "' where iduser='" .$_SESSION['id']. "'";
$sqlqueryconducteur = mysqli_query($co, $reqConducteur5);
		
	}
	if(!empty($_POST['adresse']))
	{
		
		$reqConducteur5="UPDATE user SET adresse='" .$_POST['adresse']. "' where iduser='" .$_SESSION['id']. "'";
$sqlqueryconducteur = mysqli_query($co, $reqConducteur5);
		
	}
	if(!empty($_POST['postcode']))
	{
		
		$reqConducteur5="UPDATE user SET postcode='" .$_POST['postcode']. "' where iduser='" .$_SESSION['id']. "'";
$sqlqueryconducteur = mysqli_query($co, $reqConducteur5);
		
	}
	
}
$requeteTextt = "SELECT * FROM user where iduser='" .$_SESSION['id']. "'";			
					
		
					$reqSqlt = mysqli_query($co, $requeteTextt);
$tabt = lectureTableauPhpResultatRequete($reqSqlt);
$name = $tabt['nom'][0];
$prenom = $tabt['prenom'][0];
$email =$tabt['email'][0];
$pays = $tabt['pays'][0];
$ville = $tabt['ville'][0];
$postcode = $tabt['postcode'][0];
$adresse = $tabt['adresse'][0];
$genre = $tabt['genre'][0];
$contactname = $tabt['contactname'][0];
$modecontact = $tabt['modecontact'][0];
$mobile = $tabt['mobile'][0];
$year = $tabt['year'][0];
$month = $tabt['month'][0];
$day = $tabt['day'][0];
				?>
				
            <div class="mod-md ct-tab4 on">
                <div class="mod-md">

                    <form method="post" action="">
                        <h2 class="title text-center">Information de Contact</h2>
                        <div class="mod-md mod-md10 clearfix">
                            <!--<dl>
                                <dt></dt>
                                <dd>
                                    <div class="user-photo"><p><img src="../images/photo.jpg"/></p><a  href="#">Modify</a></div>
                                </dd>
                            </dl>-->
                            <dl><dt>Nom:</dt><dd><input type="text" id="cus_fn" name="name" value="<?php echo $name;?>" class="w145 txt mr10"><input type="text" value="<?php echo $prenom;?>" id="cus_ln" name="prenom" class="w145 txt mr10"></dd></dl>
                            <dl><dt>Email:</dt><dd><input type="text" value="<?php echo $email;?>" readonly="true" class="txt w3010 mr10" id="cus_email" name="emailcontact"></dd></dl>
                            <dl>
                                <dt>Mobile:</dt>
                                <dd>
                                    <div class="clearfix h32 bd-line">
                                        <ul>
                                            <li><input type="text" value="<?php if($mobile != NULL) {
											echo $mobile;}
											else
											{ echo "";}?>" id="cus_macode" name="mobile" class="fl txt w198 mr10"></li>
                                               </ul>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>Vous contacter:</dt>
                                <dd>
                                    <div class="clearfix bd-line h32">
                                        <ul>
                                            <li><select class="w100 mr10" name="modecontact">
										<?php
										if($modecontact != NULL)
										{
										if($modecontact == 'skype')
										{
											?>
											<option selected="selected" value="skype">Skype</option>
											 
                                                    <option value="facebook">Facebook</option>
											<?php
										}
										if($modecontact == 'facebook')
										{
											?>
											<option selected="selected" value="facebook">Facebook</option>
											 <option value="skype">Skype</option>
                                                 
											<?php
										}
										
										}
										else
										{?>
									 <option  selected="selected" value="skype">Skype</option>
										
                                                    <option value="facebook">Facebook</option>
										<?php
										}
										?>
                                                   
                                                </select></li>
                                            <li><input type="text" value="<?php if($contactname != NULL) {
											echo $contactname;}
											else
											{ echo "";}?>" id="contactname" class="w198 txt mr10" name="contactname"></li>
                                        </ul>
                                    </div>
                                </dd>
                            </dl>
							<dl>
							  <a href="/security/index" class="cly ul">Changer votre mot de passe</a>
							</dl>
                        </div>
                        <div class="mod-tt mod-tt10 clearfix">
						  <h2 class="title text-center">Informations Personnelles</h2>
                          
                        </div>
                        <div class="mod-md mod-md10 clearfix">
                            <dl><dt>Date de naissance:</dt>
                                <dd>
                                    <select class="w70 mr10" id="year" name="year"><option value="">Annee</option>
									<?php if($year != NULL)
									{?>
										 <option selected="selected" value="<?php echo $year;?>"><?php echo $year;?></option><?php
									}?>
                                  <option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option>                                    </select>
                                 

								<select class="w70 mr10" name="month" >
								<?php if($month != NULL)
								{
									?> <option selected="selected" value="<?php echo $month;?>"><?php echo $month;?></option>
									<?php
									
								}?>
										 <option value="Janvier">Janvier</option>
										 <option value="Fevrier">Fevrier</option>
										 <option value="Mars">Mars</option>
										 <option value="Avril">Avril</option>
										 <option value="Mai">Mai</option>
										 <option value="Juin">Juin</option>
										 <option value="Juillet">Juillet</option>
										 <option value="Aout">Aout</option>
										 <option value="Septembre">Septembre</option>
										 <option value="Octobre">Octobre</option>
										 <option value="Novembre">Novembre</option>
									 <option value="Decembre">Decembre</option>
										</select>
									
									
								<select class="w70 mr10" name="day">
								<?php if($day != NULL)
								{
									?> <option selected="selected" value="<?php echo $day;?>"><?php echo $day;?></option>
									<?php
									
								}
								
								?>
										 <option value="1">1</option>
										 <option value="2">2</option>
										 <option value="3">3</option>
										 <option value="4">4</option>
										 <option value="5">5</option>
										 <option value="6">6</option>
										 <option value="7">7</option>
										 <option value="8">8</option>
										 <option value="9">9</option>
										 <option value="10">10</option>
										 <option value="11">11</option>
										 <option value="12">12</option>
										 <option value="13">13</option>
										 <option value="14">14</option>
										 <option value="15">15</option>
										 <option value="16">16</option>
										 <option value="17">17</option>
										 <option value="18">18</option>
										 <option value="19">19</option>
										 <option value="20">20</option>
										 <option value="21">21</option>
										 <option value="22">22</option>
										 <option value="23">23</option>
										 <option value="24">24</option>
										 <option value="25">25</option>
										 <option value="26">26</option>
										 <option value="27">27</option>
										 <option value="28">28</option>
										 <option value="29">29</option>
										 <option value="30">30</option>
										 <option value="31">31</option>
										 
										</select>

                                    
                             
                                    
                                </dd></dl>
                            <dl><dt>Titre:</dt>
                                <dd>
								<?php
								if( $genre != NULL)
								{
								if($genre == 'masculin'){
									?>
                                       <label for="user-tt-mrs">
							 
									   <input id="user-tt-mr" name="genre" checked="checked" value="0" type="radio" class="mr10">Masculin.</label>
						
								   <label for="user-tt-mrs">
                                        <input id="user-tt-mrs" name="genre" value="1" type="radio" class="mr10">Feminin.</label>
                                       </dd></dl>
									  <?php	}
								if( $genre == 'feminin')
								{?>
							
							<label for="user-tt-mrs">
							 
									   <input id="user-tt-mr" name="genre" value="0" type="radio" class="mr10">Masculin.</label>
						
								   <label for="user-tt-mrs">
                                        <input id="user-tt-mrs" name="genre" checked="checked" value="1" type="radio" class="mr10">Feminin.</label>
                                       </dd></dl>
							
							
								<?php
								}
								}
								else
								{?><label for="user-tt-mrs">
							 
									   <input id="user-tt-mr" name="genre" checked="checked" value="0" type="radio" class="mr10">Masculin.</label>
						
								   <label for="user-tt-mrs">
                                        <input id="user-tt-mrs" name="genre" value="1" type="radio" class="mr10">Feminin.</label>
                                       </dd></dl>
								<?php }?>
                            <dl><dt>Pays:</dt><dd>
                           

<select class="w300 mr10" name="pays">
<?php
						   if($pays != NULL)
						   {?>
							   <option selected="selected" value="<?php echo $pays;?>"><?php echo $pays;?></option>
					<?php	   }
						   else
						   {?>
							   <option value="Maroc" selected="selected">Maroc</option>
						 <?php  }?>
<option value="Afghanistan">Afghanistan</option>
<option value="Afrique_du_Sud">Afrique du Sud</option>
<option value="Albanie">Albanie</option>
<option value="Algerie">Algerie</option>
<option value="Allemagne">Allemagne</option>
<option value="Andorre">Andorre</option>
<option value="Angola">Angola</option>
<option value="Antigua-et-Barbuda">Antigua-et-Barbuda</option>
<option value="Arabie_saoudite">Arabie saoudite</option>
<option value="Argentine">Argentine</option>
<option value="Armenie">Armenie</option>
<option value="Australie">Australie</option>
<option value="Autriche">Autriche</option>
<option value="Azerbaidjan">Azerbaidjan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrein">Bahrein</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbade">Barbade</option>
<option value="Belau">Belau</option>
<option value="Belgique">Belgique</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bhoutan">Bhoutan</option>
<option value="Bielorussie">Bielorussie</option>
<option value="Birmanie">Birmanie</option>
<option value="Bolivie">Bolivie</option>
<option value="Bosnie-Herzégovine">Bosnie-Herzegovine</option>
<option value="Botswana">Botswana</option>
<option value="Bresil">Bresil</option>
<option value="Brunei">Brunei</option>
<option value="Bulgarie">Bulgarie</option>
<option value="Burkina">Burkina</option>
<option value="Burundi">Burundi</option>
<option value="Cambodge">Cambodge</option>
<option value="Cameroun">Cameroun</option>
<option value="Canada">Canada</option>
<option value="Cap-Vert">Cap-Vert</option>
<option value="Chili">Chili</option>
<option value="Chine">Chine</option>
<option value="Chypre">Chypre</option>
<option value="Colombie">Colombie</option>
<option value="Comores">Comores</option>
<option value="Congo">Congo</option>
<option value="Cook">Cook</option>
<option value="Coree_du_Nord">Coree du Nord</option>
<option value="Coree_du_Sud">Coree du Sud</option>
<option value="Costa_Rica">Costa Rica</option>
<option value="Cote_Ivoire">Cote d'Ivoire</option>
<option value="Croatie">Croatie</option>
<option value="Cuba">Cuba</option>
<option value="Danemark">Danemark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominique">Dominique</option>
<option value="Egypte">Egypte</option>
<option value="Emirats_arabes_unis">Emirats arabes unis</option>
<option value="Equateur">Equateur</option>
<option value="Erythree">Erythree</option>
<option value="Espagne">Espagne</option>
<option value="Estonie">Estonie</option>
<option value="Etats-Unis">Etats-Unis</option>
<option value="Ethiopie">Ethiopie</option>
<option value="Fidji">Fidji</option>
<option value="Finlande">Finlande</option>
<option value="France">France</option>
<option value="Gabon">Gabon</option>
<option value="Gambie">Gambie</option>
<option value="Georgie">Georgie</option>
<option value="Ghana">Ghana</option>
<option value="Grèce">Grece</option>
<option value="Grenade">Grenade</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinee">Guinee</option>
<option value="Guinee-Bissao">Guinee-Bissao</option>
<option value="Guinee_equatoriale">Guinee equatoriale</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Honduras">Honduras</option>
<option value="Hongrie">Hongrie</option>
<option value="Inde">Inde</option>
<option value="Indonesie">Indonesie</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Irlande">Irlande</option>
<option value="Islande">Islande</option>
<option value="Israël">Israel</option>
<option value="Italie">Italie</option>
<option value="Jamaique">Jamaique</option>
<option value="Japon">Japon</option>
<option value="Jordanie">Jordanie</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kirghizistan">Kirghizistan</option>
<option value="Kiribati">Kiribati</option>
<option value="Koweit">Koweit</option>
<option value="Laos">Laos</option>
<option value="Lesotho">Lesotho</option>
<option value="Lettonie">Lettonie</option>
<option value="Liban">Liban</option>
<option value="Liberia">Liberia</option>
<option value="Libye">Libye</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lituanie">Lituanie</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macedoine">Macedoine</option>
<option value="Madagascar">Madagascar</option>
<option value="Malaisie">Malaisie</option>
<option value="Malawi">Malawi</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malte">Malte</option>
<option value="Maroc">Maroc</option>
<option value="Marshall">Marshall</option>
<option value="Maurice">Maurice</option>
<option value="Mauritanie">Mauritanie</option>
<option value="Mexique">Mexique</option>
<option value="Micronesie">Micronesie</option>
<option value="Moldavie">Moldavie</option>
<option value="Monaco">Monaco</option>
<option value="Mongolie">Mongolie</option>
<option value="Mozambique">Mozambique</option>
<option value="Namibie">Namibie</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norvège">Norvege</option>
<option value="Nouvelle-Zelande">Nouvelle-Zelande</option>
<option value="Oman">Oman</option>
<option value="Ouganda">Ouganda</option>
<option value="Ouzbekistan">Ouzbekistan</option>
<option value="Pakistan">Pakistan</option>
<option value="Panama">Panama</option>
<option value="Papouasie-Nouvelle_Guinee">Papouasie - Nouvelle Guinee</option>
<option value="Paraguay">Paraguay</option>
<option value="Pays-Bas">Pays-Bas</option>
<option value="Perou">Perou</option>
<option value="Philippines">Philippines</option>
<option value="Pologne">Pologne</option>
<option value="Portugal">Portugal</option>
<option value="Qatar">Qatar</option>
<option value="Republique_centrafricaine">Republique centrafricaine</option>
<option value="Republique_dominicaine">Republique dominicaine</option>
<option value="Republique_tcheque">Republique tcheque</option>
<option value="Roumanie">Roumanie</option>
<option value="Royaume-Uni">Royaume-Uni</option>
<option value="Russie">Russie</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint-Christophe-et-Nieves">Saint-Christophe-et-Nieves</option>
<option value="Sainte-Lucie">Sainte-Lucie</option>
<option value="Saint-Marin">Saint-Marin </option>
<option value="Saint-Siège">Saint-Siege, ou leVatican</option>
<option value="Saint-Vincent-et-les_Grenadines">Saint-Vincent-et-les Grenadines</option>
<option value="Salomon">Salomon</option>
<option value="Salvador">Salvador</option>
<option value="Samoa_occidentales">Samoa occidentales</option>
<option value="Sao_Tome-et-Principe">Sao Tome-et-Principe</option>
<option value="Senegal">Senegal</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra_Leone">Sierra Leone</option>
<option value="Singapour">Singapour</option>
<option value="Slovaquie">Slovaquie</option>
<option value="Slovenie">Slovenie</option>
<option value="Somalie">Somalie</option>
<option value="Soudan">Soudan</option>
<option value="Sri_Lanka">Sri Lanka</option>
<option value="Sued">Suede</option>
<option value="Suisse">Suisse</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Syrie">Syrie</option>
<option value="Tadjikistan">Tadjikistan</option>
<option value="Tanzanie">Tanzanie</option>
<option value="Tchad">Tchad</option>
<option value="Thailande">Thailande</option>
<option value="Togo">Togo</option>
<option value="Tonga">Tonga</option>
<option value="Trinite-et-Tobago">Trinite-et-Tobago</option>
<option value="Tunisie">Tunisie</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turquie">Turquie</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Ukraine">Ukraine</option>
<option value="Uruguay">Uruguay</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Viet_Nam">Viet Nam</option>
<option value="Yemen">Yemen</option>
<option value="Yougoslavie">Yougoslavie</option>
<option value="Zaire">Zaire</option>
<option value="Zambie">Zambie</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>

</dd></dl>
						   <dl><dt>Ville:</dt><dd><input type="text" class="w300 txt mr10" name="ville" value="<?php if($ville != NULL)
						   {
						   echo $ville;}
							   else
							   {
							   echo "";
							   }?>"></dd></dl>
                              <dl><dt>Adresse: </dt><dd><input type="text" class="w300 txt mr10" name="adresse" value="<?php if($adresse != NULL)
						   {
						   echo $adresse;}
							   else
							   {
							   echo "";}?>"></dd></dl>
                        <dl class="clearfix">
                            <dt>Code Postal :</dt><dd>
                                <input type="text" class="txt mr10 fl w300" maxlength="16" id="postcode" value="<?php if($postcode != NULL)
						   {
						   echo $postcode;}
							   else
							   {
							   echo "";
							   }?>" name="postcode">
                            </dd>
                        </dl>
						</br>
                            <dl><dt></dt><dd>
							<button type="submit" class="button button-rounded button-action">Sauvegarder</button></dd></dl>
                        </div>
                    </form>

                </div>
            </div>
          
        </div>
			</div>
		
			
		
			
			</div>
			
			</div></div>
				
				
	<?php
   }
   else{
	   echo '<script language="Javascript">

document.location.replace("index.php");

</script>';
   }
	include "page/baspage.php";
	?>