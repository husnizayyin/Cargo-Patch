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
  <meta name="keywords" content="Courier DEPRIXA-Integral Web System" />
  <meta name="author" content="Jaomweb">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!--Favicon-->
  <link rel="icon" href="uploads/favicon.png">
  
  <!-- Title-->
  <title> Budiman Cargo | <?php echo $core->site_name;?></title>
  
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
			</ul> <!-- END list-inline-->
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
          <span class="text-primary">Budiman</span> <span class="text-white">Cargo</span>
        </h1>
        <p class="u-fs-22 u-lh-1_8 my-4 text-white">
          Solusi terbaik kirim paket 
        </p>
        <a href="sign-up.php" class="btn btn btn-rounded btn-primary  u-w-170 u-mt-15">
        	Tarif Kiriman
        </a>
      </div> <!-- END col-lg-7-->
      

      <div class="col-lg-5">
			<div class="card box-shadow-v2 bg-white u-of-hidden text-center">
			 	<form action="result_track_shipment.php" method="post" class="p-4 p-md-5">
					<div class="input-group u-rounded-50 border u-of-hidden u-mb-20">
						<input type="text" name="order_inv" class="form-control border-0 p-3" placeholder="Resi :AWB-100000001" required>
					</div>
			 		<button type="submit" name="submit" class="btn btn-primary btn-rounded">
			 			<span class="icon icon-Truck text-white"></span>&nbsp;&nbsp; Cari
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
    			Perkenalkan kami adalah layanan baru dari Bus Budiman
    		</h2>
    		<div class="u-h-4 u-w-70 bg-primary rounded mt-4 u-mb-30 mx-auto"></div>
    		<p>
			Percayakan paket anda pada kami, daftarkan diri and dan jadilah bagian dari keluarga Budiman
    		</p>
    		<a href="sign-up.php" class="btn btn-primary btn-rounded mt-4">Daftar</a>
    	</div>
		 <div class="col-12 u-mt-10 text-center">
     	<img src="assets-theme/img/startup/s-1.png" alt="">
     </div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section> <!-- END section-->

                                      
<section class="bg-gray-v2 u-pb-80">  
  <div class="container">
   <div class="row">
		<div class="col-lg-4 col-md-6 u-mb-70">
		<div class="media">
			<span class="icon icon-FileBox text-primary u-fs-50 mr-4"></span>
				<div class="media-body">
					<h4>
						Produk
					</h4>
					<p>
					<ul class="list-unstyled u-fw-600">
					<li class="d-flex align-items-center mb-2">
						<span class="lnr lnr-checkmark-circle mr-2 color-primary u-fs-20">
						<a href="sepatu.php">Layanan Sepatu</a> 		

						</span>

					</li>
					</p>
				</div>
			</div>
		</div> <!-- END col-lg-4 col-md-6-->
		
		<div class="col-lg-4 col-md-6 u-mb-70">
		<div class="media">
			<span class="icon icon-Files text-primary u-fs-50 mr-4"></span>
				<div class="media-body">
					<h4>
						Tarif
					</h4>
					<p>
					Dengan ongkos kirim yang lebih ekonomis kami tetap memberikan pelayanan yang terbaik cek ongkos kirim mu dibawah.
					</p>
					<p>
					<span class="color-primary u-fs-20">
						<a href="shipping-rates.php">cek ongkir mu </a> 		

						</span>
					 
					
					</p>
				</div>
			</div>
		</div> <!-- END col-lg-4 col-md-6-->
		
		<div class="col-lg-4 col-md-6 u-mb-70">
		<div class="media">
			<span class="icon icon-Truck text-primary u-fs-50 mr-4"></span>
				<div class="media-body">
					<h4>
						Armada
					</h4>
					<p>
					Kami memliki ratusan armada bus yang siap mengatar paket anda samapi ke kota tujuan yang ada di Jawa Barat. 
					</p>
				</div>
			</div>
		</div> <!-- END col-lg-4 col-md-6-->
		
		<div class="col-lg-4 col-md-6 u-mb-70">
		<div class="media">
			<span class="icon icon-Pointer text-primary u-fs-50 mr-4"></span>
				<div class="media-body">
					<h4>
						Lokasi
					</h4>
					<p>
					<ul class="list-unstyled u-fw-600">
					<li class="d-flex align-items-center mb-2">
						<span class="lnr lnr-checkmark-circle mr-2 color-primary u-fs-20"></span>
						Tasikmalaya
					</li>
					<ul class="list-unstyled u-fw-600">
					<li class="d-flex align-items-center mb-2">
						<span class="lnr lnr-checkmark-circle mr-2 color-primary u-fs-20"></span>
						Bandung
					</li>
					<ul class="list-unstyled u-fw-600">
					<li class="d-flex align-items-center mb-2">
						<span class="lnr lnr-checkmark-circle mr-2 color-primary u-fs-20"></span>
						Bekasi
					</li>
					<ul class="list-unstyled u-fw-600">
					<li class="d-flex align-items-center mb-2">
						<span class="lnr lnr-checkmark-circle mr-2 color-primary u-fs-20"></span>
						Banjar
					</li>
					<ul class="list-unstyled u-fw-600">
					<li class="d-flex align-items-center mb-2">
						<span class="lnr lnr-checkmark-circle mr-2 color-primary u-fs-20"></span>
						Dll
					</li>
					</p>
				</div>
			</div>
		</div> <!-- END col-lg-4 col-md-6-->
		
		
		
   </div> <!--END row-->
  </div> <!-- END container-->
</section> <!-- END section-->


 <section style="background:#7C7C7C url(assets-theme/img/keynote.jpg) no-repeat; background-size:cover; background-position: top right;">
 <div class="overlay bg-black-opacity-0_5"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto text-center">
        <h2 class="h1 text-white mb-4">
          Aman dan Tepat Waktu
        </h2>
        <a data-fancy href="https://www.youtube.com/watch?v=gKF76v4lEWc" data-fancybox>
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