
<?php include "fct.php";?>
<html lang="fr">
<head>
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
     <link rel="icon" type="image/png" href="images/logobenhida.png" />
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
function recalculer1()
{
//déclarons trois variables temporaires
var val1=0;

// et une variable pour le total
var total1=0;
//pour les menus, le test n'est pas nécessaire
val1=parseInt(document.getElementById('cbrp').value);

//calculons le total
total1=val1*10;
//plaçons-le dans le chmaps resultat
document.getElementById('prix').value=total1;
//le tour est joué  
}
</script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1482656202036913";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
   
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->


<?php
$co = connexionBdd();

$date = date("j/n/Y"); 
if(empty($_POST)){
	 echo '<script language="Javascript">

document.location.replace("index.php");

</script>';
}if(!empty($_POST['refer']))
{
$refer = $_POST['refer'];
}

$requeteText = "SELECT * FROM commanderiot WHERE refer ='" . $refer . "'";
$reqSql = mysqli_query($co, $requeteText);

$tab = lectureTableauPhpResultatRequete($reqSql);

$cbrp = $tab['cbrp'][0];
$iduser = $tab['iduser'][0];
$paiement = $tab['paiement'][0];				
				$date = $tab['date'][0];
				$prix = $tab['prix'][0];


$requeteTextt = "SELECT * FROM user WHERE iduser ='" . $iduser . "'";
$reqSqll = mysqli_query($co, $requeteTextt);

$tabt = lectureTableauPhpResultatRequete($reqSqll);

$name = $tabt['nom'][0];
$prenom = $tabt['prenom'][0];
$email =$tabt['email'][0];
?>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> Ma-Games
          <small class="pull-right">Date: <?php echo $date;?></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          De
          <address>
            <strong>Mohamed Benhida</strong><br>
           
            mobile: 06 06 39 51 19<br>
            Email: mohameedbenhida@gmail.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          A
          <address>
            <strong><?php echo $name;?> <?php echo $prenom;?></strong><br>
            
            Email: <?php echo $email;?>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>#<?php echo $refer;?></b><br>
          
        </div>
        <!-- /.col -->
      </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Code</th>
              <th>RP</th>
              <th>Date</th>
              <th>Total</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td><?php echo $refer;?></td>
              <td><?php if($cbrp == 11)
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
		} ?> RP</td>
			  <td><?php echo $date;?></td>
           
              <td><?php echo $prix;?> DH</td>
            </tr>
            
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
    <!-- /.row -->

     <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead">Payment Methods:</p>
		  <?php
		  if($paiement == 'western union')
		  {?>
		  
          <img src="images/wu.png" width="120px" height="120px" alt="Visa">
   

          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
            dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
          </p>
		  <?php
		  }
			  if($paiement == 'wafacash')
			  { ?><img src="images/wafacash.jpg" width="120px" height="120px" alt="Visa">
   

          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
            dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
          </p>
		  <?php
		  
			  }
		  if($paiement == 'kamas')
		  {
			    ?><img src="images/dofusss.jpg" width="120px" height="120px" alt="Visa">
   

          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
            dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
          </p>
		  <?php
		  } 
		  ?>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
        <div class="pouss">
	 <img src="images/rp.png" width="120px" height="120px">
      </div>
	  </div>
        <!-- /.col -->
      </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
