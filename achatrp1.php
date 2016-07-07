<?php include "page/hautpage.php";
$co = connexionBdd();
$date = date("j/n/Y"); 


if(!empty($_POST['refer']))
{
$refer = $_POST['refer'];
if($_POST['paiement'] == 1)
{
	$pa = 'western union';
	$reqConducteur5="UPDATE commanderiot SET paiement='" .$pa. "' WHERE refer ='" .$refer. "' ";
$sqlqueryconducteur = mysqli_query($co, $reqConducteur5);
}
if($_POST['paiement'] == 2)
{
	$pa = 'wafacash';
	$reqConducteur5="UPDATE commanderiot SET paiement='" .$pa. "' WHERE refer ='" .$refer. "' ";
$sqlqueryconducteur = mysqli_query($co, $reqConducteur5);
}
if($_POST['paiement'] == 3)
{
	$pa = 'kamas';
	$reqConducteur5="UPDATE commanderiot SET paiement='" .$pa. "' WHERE refer ='" .$refer. "' ";
$sqlqueryconducteur = mysqli_query($co, $reqConducteur5);
}

}

if(empty($_POST)){
	 echo '<script language="Javascript">

document.location.replace("index.php");

</script>';
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
				
           
		   <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Ma-games.
            <small class="pull-right">Date: <?php echo $date;?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
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
              <td> <?php if($cbrp == 11)
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

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
		<form method="post" action="imprimer">
		<input type="hidden" name="refer" value="<?php echo $refer;?>" >
		
<button type="submit" class="btn btn-default"><i class="fa fa-print"></i> Imprimer</button>


         </form>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Mes Commandes
          </button>
        </div>
      </div>
    </section>
		   
		   
		   
		   
        </div>
			</div>
		
			</div>
		
			
			</div>
			</br></br></br>
			
				
				
	<?php

	include "page/baspage.php";
	?>