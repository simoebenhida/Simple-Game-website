<?php include "page/hautpage.php";?>



	<section id="form"><!--form-->
	
<img src="images/lol.png" width="1349px" height="300px">	
		<div class="container">
	

			<div class="row">
			
			
			
			<div class="col-sm-99">
					<div class="login-form"><!--login form-->
					
					
					
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
						</div><!--/login form-->
				
			</div>
				
			
		</div>
		</div>
	</section><!--/form-->
	
<?php
include "page/baspage.php";?>