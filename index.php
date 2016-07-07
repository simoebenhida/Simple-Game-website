<?php include "page/hautpage.php";

?>
	<script type="text/javascript">
(function() {
    if (typeof window.janrain !== 'object') window.janrain = {};
    window.janrain.settings = {};
    
    janrain.settings.tokenUrl = ''http://localhost/ma-games/connexionjanrain.php';';

    function isReady() { janrain.ready = true; };
    if (document.addEventListener) {
      document.addEventListener("DOMContentLoaded", isReady, false);
    } else {
      window.attachEvent('onload', isReady);
    }

    var e = document.createElement('script');
    e.type = 'text/javascript';
    e.id = 'janrainAuthWidget';

    if (document.location.protocol === 'https:') {
      e.src = 'https://rpxnow.com/js/lib/user/engage.js';
    } else {
      e.src = 'http://widget-cdn.rpxnow.com/js/lib/user/engage.js';
    }

    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(e, s);
})();
</script>

	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
					
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
								<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
						
							<div class="item active">
								<div class="col-sm-6">
								
									<h1><span>MA</span>-Games</h1>
									<h2>Vendez vos Kamas avec des bons prix en toute sécurité.</h2>
									</br>
									<a href="dofus.php"><button type="button" class="button button-rounded button-action">Vendre</button></a>
									
								</div>
								<div class="col-sm-6">
									<img src="images/dofushome.png" class="girl img-responsive" alt="" />
									
								</div>
							</div>
							<div class="item">
							
								<div class="col-sm-6">
									<h1><span>MA</span>-Games</h1>
									<h2>Counter-Strike: Global Offensive STEAM CD-KEY</h2>
									</br>
									<button type="button" class="button button-rounded button-action">Acheter</button>
								</div>
								<div class="col-sm-6">
									<img src="images/csgoe.jpg" class="girl img-responsive" alt="" />
						
								</div>
							</div>
								<div class="item">
								<div class="col-sm-6">
									<h1><span>MA</span>-Games</h1>
									<h2>Riot Point</h2>
									</br>
									<button type="button" class="button button-rounded button-action">Acheter</button>
								</div>
								<div class="col-sm-6">
									<img src="images/blitzz.jpg" class="girl img-responsive" alt="" />
						
								</div>
							</div>
							
							
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	</br></br></br>
	
		<div class="container">
			<div class="row">
			<?php 
					include 'page/gauchepage.php';?>
					
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Meilleurs vente</h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/dofus2.png" alt="" />
											<h2>30 MAD</h2>
											</br>
											<p>Vendre 5mk</p>
											
											<form method="get" action="nouveautedofus.php" >
											<input type="hidden" name="kamas" value="5" >
								<button type="submit" class="button button-rounded button-action"><i class="fa fa-shopping-cart"></i> Vendre</button>
											</form>
										</div>
										
								</div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/rp.png" width="242px" height="344px" />
										
										<h2>230 MAD</h2></br>
										<p>3250 RP</p>
										
									<form method="get" action="commandeRP" >
											<input type="hidden" name="cbrp" value="23" >
								<button type="submit" class="button button-rounded button-action"><i class="fa fa-shopping-cart"></i> Acheter</button>
											</form>
											</div>
								
								</div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/rp.png" width="242px" height="344px" />
									<h2>380 MAD</h2></br>
										<p>5725 RP</p>
										<form method="get" action="commandeRP" >
											<input type="hidden" name="cbrp" value="38" >
								<button type="submit" class="button button-rounded button-action"><i class="fa fa-shopping-cart"></i> Acheter</button>
											</form>
											</div>
									
									<img src="images/home/new.png" class="new" alt="" />
								</div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
<div class="productinfo text-center">
										<img src="images/rp.png" width="242px" height="344px" />
									<h2>550 MAD</h2></br>
										<p>8250 RP</p>
										<form method="get" action="commandeRP" >
											<input type="hidden" name="cbrp" value="55" >
								<button type="submit" class="button button-rounded button-action"><i class="fa fa-shopping-cart"></i> Acheter</button>
											</form>
											</div>
									
									<img src="images/home/new.png" class="new" alt="" />
								</div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/dofus2.png" alt="" />
										<h2>300 MAD</h2></br>
										<p>Vendre 50mk</p>
										<form method="get" action="nouveautedofus.php" >
											<input type="hidden" name="kamas" value="50" >
								<button type="submit" class="button button-rounded button-action"><i class="fa fa-shopping-cart"></i> Vendre</button>
									</form>	
									</div>
									
									
								</div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/dofus2.png" alt="" />
										<h2>120 MAD</h2></br>
										<p>Vendre 20mk</p>
										<form method="get" action="nouveautedofus.php" >
											<input type="hidden" name="kamas" value="20" >
								<button type="submit" class="button button-rounded button-action"><i class="fa fa-shopping-cart"></i> Vendre</button>
</form>										
										</div>
									
								</div>
								
							</div>
						</div>
						
					</div><!--features_items-->
					
					
				</div>
			</div>
		</div>
	

		<?php include "page/baspage.php";?>