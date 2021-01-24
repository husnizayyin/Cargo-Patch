<?php

  define("_VALID_PHP", true);
  require_once("init.php");
  

?>
<!DOCTYPE html>
<html lang="en">

<head>
 
  <!--Meta-->
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="keywords" content="Budiman cargo" />
  <meta name="author" content="Husni Zayyin Ansori">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!--Favicon-->
  <link rel="icon" href="uploads/favicon.png">
  
  <!-- Title-->
  <title> Sekarang Kirim barang Bisa Lewat Bus| <?php echo $core->site_name;?></title>
  
  <!--Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700%7COpen+Sans:400,600,700" rel="stylesheet">
  
	<!--Icon fonts-->
	<link rel="stylesheet" href="assets-theme/vendor/strokegap/style.css">
	<link rel="stylesheet" href="assets-theme/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets-theme/vendor/linearicons/style.css">
  
  <link rel="stylesheet" href="assets-theme/css/bundle.css">
  <link rel="stylesheet" href="assets-theme/css/style.css">
  
</head>

 <body id="top">
 
<header class="header-top bg-gray-v1">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 mb-3 mb-md-0 text-center text-md-left">
			<ul class="list-inline mb-0">
				<li class="list-inline-item mr-3">
					<span class="icon icon-Phone2 text-primary mr-1"></span> 082132287324
				</li>
				<li class="list-inline-item">
					<span class="icon icon-Mail text-primary mr-1"></span> <a href="mailto:support@jaom.info">husni.zayyin98@gmail.coom</a>
				</li>
			</ul> <!-- END list-inline-->
			</div> <!-- END col-md-6 -->
			<div class="col-md-6 mb-3 mb-md-0">
				<ul class="list-inline social social-rounded social-default social-sm mb-0 text-center text-md-right">
					<li class="list-inline-item">
						<a href="#"><i class="fa fa-facebook"></i></a>
					</li>
					<li class="list-inline-item">
						<a href="#"><i class="fa fa-twitter"></i></a>
					</li>
					<li class="list-inline-item">
						<a href="#"><i class="fa fa-google-plus"></i></a>
					</li>
					<li class="list-inline-item">
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</li>
				</ul>
			</div> <!-- END col-md-6 -->
		</div> <!-- END row-->
	</div> <!-- END container-->
</header> <!-- END header-top-->

 <header class="header header-shrink sticky-top bg-gray-v1">
  <div class="container">
    <nav class="navbar navbar-expand-lg px-md-0">
     
		<?php require_once("header.php");?> 
      
    </nav>
  </div> <!-- END container-->
</header> <!-- END header-inverse -->


<section class="u-py-md-250 u-flex-center" style="background:#ECF5FE url(assets-theme/img/startup/hero-banner.png) no-repeat; background-size:cover; background-position: center;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 mb-5 mb-lg-0">
        <h1 class="display-4 u-fw-600">
          
      </div> <!-- END col-lg-7-->
      

      <div class="col-lg-5">
			<div class="card box-shadow-v2 bg-white u-of-hidden text-center">
			 	<form action="result_track_shipment.php" method="post" class="p-4 p-md-5">
					<div class="input-group u-rounded-50 border u-of-hidden u-mb-20">
						<input type="text" name="order_inv" class="form-control border-0 p-3" placeholder="Nomor Resi Contoh:(AWB-100000001)" required>
					</div>
			 		<button type="submit" name="submit" class="btn btn-primary btn-rounded">
			 			<span class="icon icon-Truck text-white"></span>&nbsp;&nbsp; LACAK PAKET
			 		</button>
			 	</form>
			</div>
      </div> <!-- END col-lg-5-->
    </div> <!-- END row-->
  </div> <!-- END container-->
</section> <!-- END intro-hero-->
                                   
<section id="about" class="pb-0">
  <div class="container">
    <div class="row text-left">
    	<div class="col-lg-9 mx-auto">
    		<h2 class="h1">
			Tarif Kiriman
    		</h2>
    		
    	    </div> <!-- END row-->
  </div> <!-- END container-->
</section> <!-- END section-->


<?php require_once("footer.php");?> 

	<div class="scroll-top bg-white box-shadow-v1">
		<i class="fa fa-angle-up" aria-hidden="true"></i>
	</div> 

	<script src="assets-theme/js/bundle.js"></script>
	<script src="assets-theme/js/fury.js"></script>
	<script src="assets/vendor/parallax.js/parallax.min.js"></script>

  </body>	

</html>