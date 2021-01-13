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
          <span class="text-primary">Trusted</span> <span class="text-white">AREA JAWA BARAT</span>
        </h1>
        <p class="u-fs-22 u-lh-1_8 my-4 text-white">
          KIRIM PAKETMU LEWAT BUS KAMI JAMIN SEHARI SAMPAI TUJUAN UNTUK AREA JAWA BARAT
        </p>
        <a href="shipping-rates.php" class="btn btn-primary btn-rounded mt-4">Cek Ongkir</a>

      </div> <!-- END col-lg-7-->
      

      <div class="col-lg-5">
			<div class="card box-shadow-v2 bg-white u-of-hidden text-center">
			 	<form action="result_track_shipment.php" method="post" class="p-4 p-md-5">
					<div class="input-group u-rounded-50 border u-of-hidden u-mb-20">
						<input type="text" name="order_inv" class="form-control border-0 p-3" placeholder="Shipping number Ej:(AWB-100000001)" required>
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
    <div class="row text-center">
    	<div class="col-lg-9 mx-auto">
    		<h2 class="h1">
    			PANG SAE NA SA JAWA BARAT INSYA ALLOH MOAL NGECEWAKEUN BUDIMAN MAH TOS TERJAMIN
    		</h2>
    		<div class="u-h-4 u-w-70 bg-primary rounded mt-4 u-mb-30 mx-auto"></div>
    		
    		
    	</div>
		 <div class="col-12 u-mt-10 text-center">
     	<img src="assets-theme/img/startup/s-1.png" alt="">
     </div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section> <!-- END section-->

                                      
<section class="bg-gray-v2 u-pb-80">  
  <div class="container">
		
   </div> <!--END row-->
  </div> <!-- END container-->
</section> <!-- END section-->


 <section style="background:#7C7C7C url(assets-theme/img/keynote.jpg) no-repeat; background-size:cover; background-position: top right;">
 <div class="overlay bg-black-opacity-0_5"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto text-center">
        <h2 class="h1 text-white mb-4">
          Safe and on time delivery
        </h2>
        <a data-fancy href="https://vimeo.com/234370477" data-fancybox>
          <span class="icon icon-Play u-fs-50 u-fs-md-72 text-white"></span>
        </a>
      </div>
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