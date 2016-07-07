<!DOCTYPE html>
<?php include "fct.php";?>
<html lang="fr">
<head>
<script src='https://www.google.com/recaptcha/api.js'></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ma-Games</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	  <link href="css/css/select2/select2.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="/images/favicon.ico" />
    <link href="css/css/AdminLTE.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
	<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/56b222b56cf3877e0c77112a/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<script type="text/javascript">

function toggleChat() {

Tawk_API.toggle(); return false;

}

</script>

<script language="JavaScript">
<!--
function recalculer()
{
//déclarons trois variables temporaires
var val1=0;

// et une variable pour le total
var total1=0;
//pour les menus, le test n'est pas nécessaire
val1=parseInt(document.getElementById('kamas').value);

//calculons le total
total1=val1*6;
//plaçons-le dans le chmaps resultat
document.getElementById('montant').value=total1;
//le tour est joué  
}
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1482656202036913";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
							
								<li><a href="#"><i class="fa fa-phone"></i> +212 06 06 39 51 19</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i>support@ma-games.com</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="home"><img src="images/logomagames.jpg" alt="" /></a>
						</div>
						
					</div>
					<?php 
					if ($_SESSION['connected'] == 1)
					{
						
						
						 $requeteTextt = "SELECT * FROM user where idUser='" .$_SESSION['id']. "'";			
					
		 $coo = connexionBdd();
					$reqSqlt = mysqli_query($coo, $requeteTextt);

$tabt = lectureTableauPhpResultatRequete($reqSqlt);
$admin = $tabt['admin'][0];
 if($admin == 1)
 {
						
						?>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
							<li><a><i class="fa fa-user"></i>Hi! <?php echo $_SESSION['nom'];?> </a></li>
							<li><a href="logout.php"><i class="fa fa-lock"></i>Déconnexion</a></li>
							<li><a href="admincommande"><i class="fa fa-lock"></i>commandes</a></li>
							<li><a href="adminusers"><i class="fa fa-lock"></i>users</a></li>
						</ul>
						</div>
					</div>
						<?php
						
 }
 else
 {
						
							?>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
							<li><a><i class="fa fa-user"></i>Hi! <?php echo $_SESSION['nom'];?> </a></li>
							<li><a href="logout.php"><i class="fa fa-lock"></i>Déconnexion</a></li>
							
						</ul>
						</div>
					</div>
						<?php
 }}
							else
							{?>
								<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
							<li><a href="connection"><i class="fa fa-lock"></i>Login</a></li>
                    	<li><a href="inscription"><i class="fa fa-star"></i>S'inscrire</a></li>
						</ul>
						</div>
					</div>
							<?php } ?>
								
							
				</div>
			</div>
		</div><!--/header-middle-->
	
		
	</header><!--/header-->
	