<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>MA</span>-GAMES</h2>
							<p>Une communaute des jeunes marocains essaye de facilite les taches pour les autre gamers.</p>
						</div>
					</div>
					
					<div class="col-sm-96">
					<?php
					if(!empty($_POST['email']))
					{
						
						insertintoemailnews($_POST['email']);
					}?>
						<div class="single-widget">
							<h2>Nous News</h2>
							<form method="post" action="" class="searchform">
								<input type="email" name="email" placeholder="Votre adresse email">
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Veuillez saisir votre email pour suivre notre news...</p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		

		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright 2016 MA-Games Inc. All rights reserved.</p>
					
				</div>
			</div>
		</div>
		
	</footer>
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>