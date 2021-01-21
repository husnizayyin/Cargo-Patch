<?php


  define("_VALID_PHP", true);
  require_once("../init.php");
  
  if (!$user->is_Admin())
      redirect_to("login.php");
	
	$row = $user->getUserData();
	
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../uploads/favicon.png">
	
    <title><?php echo $lang['status-ship1'] ?> | <?php echo $core->site_name ?></title>
    <!-- This page plugin CSS -->

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

</head>

<body>

    <div id="main-wrapper">
	
        <?php include 'topbar.php'; ?>
		
        <!-- End Topbar header -->

		
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
 
		<?php include 'left_sidebar.php'; ?>
	

        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
		
		<!-- General queries to the database  -->		   

        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title"><?php include("filter.php");?></h4>
                    </div>
                </div>
				<?php include 'head_courier.php'; ?>
            </div>
			<?php $office = $core->getOffices(); ?>
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- row -->
				<!-- Edit Shipment -->
				<?php switch(Filter::$action): case "status": ?>
				<?php $row = Core::getRowById(Core::cTable, Filter::$id);?>
				<?php $statusrow = $core->getStatus(); ?>
				<div class="row justify-content-center">
					<!-- Column -->
					<div class="col-sm-12 col-lg-8">
						<div class="card">
							<div class="card-body">
								<div id="loader" style="display:none"></div>
								<div id="msgholder"></div>
								<form class="xform" id="admin_form" method="post">
									<header><h4 class="modal-title"><?php echo $lang['status-ship2'] ?> <?php echo $row->order_inv;?> </h4> <?php echo $lang['status-ship3'] ?> <?php echo $row->r_dest;?> | <?php echo $row->r_city;?></header>
									<div class="row" style="display:none"> 									
										<div class="col-sm-12 col-md-6">
											<label for="inputEmail3" class="control-label col-form-label">Tracking</label>
											<div class="input-group mb-3">
												<input type="text" class="form-control" name="order_track" Value="<?php echo $row->order_inv;?>">
											</div>
										</div>

										<div class="col-sm-12 col-md-6">
											<label for="inputEmail3" class="control-label col-form-label">Id</label>
											<div class="input-group mb-3">
												<input class="form-control" name="t_id" Value="<?php echo $row->id;?>">
											</div>
										</div>
										<div class="col-sm-12 col-md-6">
											<label for="inputEmail3" class="control-label col-form-label">Phone</label>
											<div class="input-group mb-3">
												<input class="form-control" name="rc_phone" Value="<?php echo $row->rc_phone;?>">
											</div>
										</div>
									</div>
							
									<div class="row"> 									
										<div class="col-sm-12 col-md-6">
											<label for="inputEmail3" class="control-label col-form-label"><?php echo $lang['status-ship4'] ?> </label>
											<div class="input-group mb-3">
												<input type="text" class="form-control"  name="t_dest" placeholder="Pilih Kota" list="browsers" autocomplete="off" required="required">
												<datalist id="browsers">	
													<option value="Bandung">Bandung</option>
													<option value="Cimahi">Cimahi </option>
													<option value="Ciamis">Ciamis</option>
													<option value="Banjar">Banjar</option>
													<option value="Tasikmalaya">Tasikmalaya</option> 
										
												</datalist>
											</div>
										</div>

										<div class="col-sm-12 col-md-6">
											<label for="inputEmail3" class="control-label col-form-label"><?php echo $lang['status-ship5'] ?></label>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1"><i class="ti-direction-alt"></i></span>
												</div>
												<input class="form-control" name="t_city" placeholder="<?php echo $lang['status-ship5'] ?>">
											</div>
										</div>
									</div>
									<div class="row"> 									
										<div class="col-sm-12 col-md-6">
											<label for="inputEmail3" class="control-label col-form-label"><?php echo $lang['status-ship6'] ?></label>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<span style="color:#ff0000" class="ti-calendar"></span>
													</span>
												</div>
												<input type="text" class="form-control" id="datepicker-autoclose" name="t_date"placeholder="mm/dd/yyyy" data-toggle="tooltip" data-placement="bottom" title="<?php echo $lang['add-title16'] ?>">
											</div>
										</div>

										<div class="col-sm-12 col-md-6">
											<label for="inputEmail3" class="control-label col-form-label"><?php echo $lang['status-ship7'] ?></label>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1"><i class="ti-timer"></i></span>
												</div>
												<input class="form-control" name="t_hour" value="<?php date_default_timezone_set("".$core->timezone.""); echo "" . date("h:i:sa"); ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12 col-md-6">
											<label for="message-text" class="control-label"><?php echo $lang['status-ship8'] ?></label>
											<textarea class="form-control" placeholder="Details of change status...." id="message-text" name="comments"></textarea>
										</div>
										<div class="col-sm-12 col-md-3">
											<div class="form-group"> 
												<label for="inputcontact" class="control-label col-form-label">Code Office</label> 
												<select class="form-control" name="code_offnew" list="browsee" autocomplete="off">
													<?php foreach ($office as $row):?>
														<option value="<?php echo $row->code_off; ?>"><?php echo $row->code_off; ?></option>
													<?php endforeach;?>
												</select>													
											</div> 
										</div> 
										<div class="col-sm-12 col-md-3">
											<label for="inputcontact" class="control-label col-form-label"><?php echo $lang['status-ship9'] ?> <i style="color:#ff0000" class="fas fa-shipping-fast"></i></label>
											<div class="input-group mb-3">
												<select class="form-control" name="status_courier" list="browser" autocomplete="off">
													<?php foreach ($statusrow as $row):?>
													<?php if($row->mod_style == 'Delivered'){?>
													<?php }elseif($row->mod_style == 'Pending'){?>
													<?php }elseif($row->mod_style == 'Rejected'){?>
													<?php }else{ ?>
													<option value="<?php echo $row->mod_style; ?>"><?php echo $row->mod_style; ?></option>
													<?php } ?>
													<?php endforeach;?>
												</select>
											</div>
										</div>
									</div>
									</br>
									<footer>
										<button class="button" name="dosubmit" type="submit"><?php echo $lang['status-ship10'] ?><span><i class="ti-briefcase"></i></span></button>
										<a href="index.php" class="button button-secondary"><span><i class="ti-share-alt"></i></span> <?php echo $lang['status-ship11'] ?></a> 
									</footer>
								</form>
							</div>
						</div>
					</div>
					<!-- Column -->
				</div>
                <!-- End row -->
            </div>
			<?php echo Core::doForm("processStatusCourier");?> 
			<?php break;?>
			<?php endswitch;?>

			
			<?php
  
			  if (!defined("_VALID_PHP"))
				  die('Direct access to this location is not allowed.');
			?>			
			
			<footer class="footer text-center">
				&copy <?php echo date('Y').' '.$core->site_name;?> - <?php echo $lang['foot'] ?>
			</footer>

			<!-- End footer -->
		</div>
	</div>

	<!-- End Wrapper -->
		

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<!-- Bootstrap tether Core JavaScript -->
		<script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
		<script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- apps -->
		<script src="dist/js/app.min.js"></script>
		<script src="dist/js/app.init.js"></script>
		<script src="dist/js/app-style-switcher.js"></script>
		<!-- slimscrollbar scrollbar JavaScript -->
		<script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
		<script src="assets/extra-libs/sparkline/sparkline.js"></script>
		<!--Wave Effects -->
		<script src="dist/js/waves.js"></script>
		<!--Menu sidebar -->
		<script src="dist/js/sidebarmenu.js"></script>
		<!--Custom JavaScript -->
		<script src="dist/js/custom.min.js"></script>

		<script src="assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
		<script>
		// Date Picker
		jQuery('.mydatepicker, #datepicker, .input-group.date').datepicker();
		jQuery('#datepicker-autoclose').datepicker({
			autoclose: true,
			todayHighlight: true
		});
		jQuery('#date-range').datepicker({
			toggleActive: true
		});
		jQuery('#datepicker-inline').datepicker({
			todayHighlight: true
		});
		</script>
		
</body>

</html>
