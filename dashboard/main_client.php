<?php
// *************************************************************************
// *                                                                       *
// * DEPRIXA -  Integrated Web system                                      *
// * Copyright (c) JAOMWEB. All Rights Reserved                            *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * Email: osorio2380@yahoo.es                                            *
// * Website: http://www.jaom.info                                         *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * This software is furnished under a license and may be used and copied *
// * only  in  accordance  with  the  terms  of such  license and with the *
// * inclusion of the above copyright notice.                              *
// * If you Purchased from Codecanyon, Please read the full License from   *
// * here- http://codecanyon.net/licenses/standard                         *
// *                                                                       *
// *************************************************************************

  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
  

?>

<?php include 'head_user.php'; ?>

<?php switch(Filter::$action): case "edit": ?>
<?php $row = Core::getRowById(Users::uTable, Filter::$id);?>

<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="row">
			<!-- Column -->
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<form class="xform" id="admin_form" method="post">
							<header><?php echo $lang['edit-clien1'] ?><span><?php echo $lang['edit-clien2'] ?> <i class="icon-double-angle-right"></i> <?php echo $row->username;?></span></header>
							<div class="row">
								<section class="col col-6">
									<label class="input state-disabled"> <i class="icon-prepend icon-user"></i> <i class="icon-append icon-asterisk"></i>
										<input type="text" disabled="disabled" name="username" readonly="readonly" value="<?php echo $row->username;?>" placeholder="<?php echo $lang['edit-clien3'] ?>">
									</label>
									<div class="note note-error"><?php echo $lang['edit-clien3'] ?></div>
								</section>
								<section class="col col-6">
									<label class="input"> <i class="icon-prepend icon-lock"></i> <i class="icon-append icon-asterisk"></i>
										<input type="text" name="password" placeholder="password">
									</label>
									<div class="note note-info"><?php echo $lang['edit-clien4'] ?></div>
								</section>
							</div>
							<div class="row">
								<section class="col col-4">
									<label class="input"> <i class="icon-prepend icon-envelope-alt"></i> <i class="icon-append icon-asterisk"></i>
										<input type="text" name="email" value="<?php echo $row->email;?>" placeholder="<?php echo $lang['edit-clien5'] ?>">
									</label>
									<div class="note note-error"><?php echo $lang['edit-clien5'] ?></div>
								</section>
								<section class="col col-4">
									<label class="input"> <i class="icon-prepend icon-user"></i>
										<input type="text" name="fname" value="<?php echo $row->fname;?>" placeholder="<?php echo $lang['edit-clien6'] ?>">
									</label>
									<div class="note note-error"><?php echo $lang['edit-clien6'] ?></div>
								</section>
								<section class="col col-4">
									<label class="input"> <i class="icon-prepend icon-user"></i>
										<input type="text" name="lname" value="<?php echo $row->lname;?>" placeholder="<?php echo $lang['edit-clien7'] ?>">
									</label>
									<div class="note note-error"><?php echo $lang['edit-clien7'] ?></div>
								</section>
							</div>
							<div class="row">
								<section class="col col-3">
								  <label class="input"> <i class="icon-prepend icon-phone"></i>
									<input type="text" name="code_phone" value="<?php echo $row->code_phone;?>" placeholder="<?php echo $lang['edit-clien8'] ?>">
								  </label>
								  <div class="note note-error"><?php echo $lang['edit-clien8'] ?></div>
								</section>
								
								<section class="col col-3">
								  <label class="input"> <i class="icon-prepend icon-phone"></i>
									<input type="text" name="phone" value="<?php echo $row->phone;?>" placeholder="<?php echo $lang['edit-clien9'] ?>">
								  </label>
								  <div class="note note-error"><?php echo $lang['edit-clien9'] ?></div>
								</section>
								<section class="col col-4">
								  <label class="input"> <i class="icon-prepend icon-location"></i>
									<input type="text" name="address" value="<?php echo $row->address;?>" placeholder="<?php echo $lang['edit-clien10'] ?>">
								  </label>
								  <div class="note note-error"><?php echo $lang['edit-clien10'] ?></div>
								</section>
								<section class="col col-2">
									<label class="input"> <i class="icon-prepend icon-user"></i>
										<input type="text" name="gender" value="<?php echo $row->gender;?>" placeholder="<?php echo $lang['edit-clien11'] ?>">
									</label>
								  <div class="note note-error"><?php echo $lang['edit-clien11'] ?></div>
								</section>
							</div>
							
							<div class="row">
								<section class="col col-4">
								  <label class="input">
									<input type="text" name="country" value="<?php echo $row->country;?>" placeholder="<?php echo $lang['edit-clien12'] ?>">
								  </label>
								  <div class="note note-error"><?php echo $lang['edit-clien12'] ?></div>
								</section>
								<section class="col col-4">
								  <label class="input">
									<input type="text" name="city" value="<?php echo $row->city;?>" placeholder="<?php echo $lang['edit-clien13'] ?>">
								  </label>
								  <div class="note note-error"><?php echo $lang['edit-clien13'] ?></div>
								</section>
								<section class="col col-4">
								  <label class="input">
									<input type="text" name="postal" value="<?php echo $row->postal;?>" placeholder="<?php echo $lang['edit-clien14'] ?>">
								  </label>
								  <div class="note note-error"><?php echo $lang['edit-clien14'] ?></div>
								</section>
							</div>
							
							<div class="row">
								<section class="col col-4">
									<select name="userlevel">
										<?php echo $user->getCustomerLevels($row->userlevel);?>
									</select>
									<div class="note"><?php echo $lang['edit-clien15'] ?> <i class="icon-exclamation-sign  tooltip" data-title=""></i></div>
								</section>
								<section class="col col-5">
									<div class="inline-group">
										<label class="radio">
											<input type="radio" name="active" value="y" <?php getChecked($row->active, "y"); ?>>
											<i></i><?php echo $lang['edit-clien16'] ?></label>
										<label class="radio">
											<input type="radio" name="active" value="n" <?php getChecked($row->active, "n"); ?>>
											<i></i><?php echo $lang['edit-clien17'] ?></label>
										<label class="radio">
											<input type="radio" name="active" value="b" <?php getChecked($row->active, "b"); ?>>
											<i></i><?php echo $lang['edit-clien18'] ?></label>
										<label class="radio">
											<input type="radio" name="active" value="t" <?php getChecked($row->active, "t"); ?>>
											<i></i><?php echo $lang['edit-clien19'] ?></label>
									</div>
									<div class="note"><?php echo $lang['edit-clien20'] ?></div>
								</section>
								<section class="col col-3">
									<div class="inline-group">
										<label class="radio">
										  <input type="radio" name="newsletter" value="1" <?php getChecked($row->newsletter, 1); ?>>
										  <i></i><?php echo $lang['edit-clien21'] ?></label>
										<label class="radio">
										  <input type="radio" name="newsletter" value="0" <?php getChecked($row->newsletter, 0); ?>>
										  <i></i><?php echo $lang['edit-clien22'] ?></label>
									</div>
									<div class="note"><?php echo $lang['edit-clien23'] ?></div>
								</section>
							</div>
							<div class="row">
								<section class="col col-4">
									<label class="input">
										<input name="avatar" type="file" class="fileinput"/>
									</label>
									<div class="note"><?php echo $lang['edit-clien24'] ?></div>
								</section>
								<section class="col col-4"> <img src="../thumbmaker.php?src=<?php echo UPLOADURL;?><?php echo ($row->avatar) ? $row->avatar : "blank.png";?>&amp;w=40&amp;h=40&amp;s=1&amp;a=t1" alt="" title="" class="avatar" /> </section>
							</div>
							<div class="row">
								<section class="col col-4">
									<label class="input state-disabled"> <i class="icon-prepend icon-calendar"></i>
										<input type="text" name="created" disabled="disabled" readonly="readonly" value="<?php echo $row->created;?>" placeholder="<?php echo $lang['edit-clien25'] ?>">
									</label>
									<div class="note"><?php echo $lang['edit-clien25'] ?></div>
								</section>
								<section class="col col-4">
									<label class="input state-disabled"> <i class="icon-prepend icon-calendar"></i>
										<input type="text" name="lastlogin" disabled="disabled" readonly="readonly" value="<?php echo $row->lastlogin;?>" placeholder="<?php echo $lang['edit-clien26'] ?>">
									</label>
									<div class="note"><?php echo $lang['edit-clien26'] ?></div>
								</section>
								<section class="col col-4">
									<label class="input state-disabled"> <i class="icon-prepend icon-laptop"></i>
										<input type="text" name="lastip" disabled="disabled" readonly="readonly" value="<?php echo $row->lastip;?>" placeholder="<?php echo $lang['edit-clien27'] ?>">
									</label>
									<div class="note"><?php echo $lang['edit-clien27'] ?></div>
								</section>
							</div>
							<hr />
							<div class="row">
								<section class="col col-12">
									<label class="textarea">
										<textarea name="notes" placeholder="<?php echo $lang['edit-clien31'] ?>" rows="3"><?php echo $row->notes;?></textarea>
									</label>
									<div class="note note"><?php echo $lang['edit-clien28'] ?></div>
								</section>
							</div>
							<footer>
								<button class="button" name="dosubmit" type="submit"><?php echo $lang['edit-clien29'] ?><span><i class="icon-ok"></i></span></button>
								<a href="customer.php?do=main_client" class="button button-secondary"><span><i class="ti-share-alt"></i></span> <?php echo $lang['edit-clien30'] ?></a> 
							</footer>
							<input name="username" type="hidden" value="<?php echo $row->username;?>" />
							<input name="id" type="hidden" value="<?php echo Filter::$id;?>" />
						</form>

					</div>
				</div>
			</div>
			<!-- Column -->
		</div>
	</div>
</div>

<?php echo Core::doForm("processCustomer");?>
<?php break;?>
<?php case"add": ?>

<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="row">
			<!-- Column -->
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<form class="xform" id="admin_form" method="post">
							<header><?php echo $lang['edit-clien1'] ?><span><?php echo $lang['edit-clien2'] ?></span></header>
							<div class="row">
								<section class="col col-6">
								  <label class="input"> <i class="icon-prepend icon-user"></i> <i class="icon-append icon-asterisk"></i>
									<input type="text" name="username" placeholder="<?php echo $lang['edit-clien3'] ?>">
								  </label>
								  <div class="note note-error"><?php echo $lang['edit-clien3'] ?></div>
								</section>
								<section class="col col-6">
								  <label class="input"> <i class="icon-prepend icon-lock"></i> <i class="icon-append icon-asterisk"></i>
									<input type="text" name="password" placeholder="<?php echo $lang['edit-clien32'] ?>">
								  </label>
								  <div class="note note-error"><?php echo $lang['edit-clien32'] ?></div>
								</section>
							</div>
							<div class="row">
								<section class="col col-4">
								  <label class="input"> <i class="icon-prepend icon-envelope-alt"></i> <i class="icon-append icon-asterisk"></i>
									<input type="text" name="email" placeholder="<?php echo $lang['edit-clien5'] ?>">
								  </label>
								  <div class="note note-error"><?php echo $lang['edit-clien5'] ?></div>
								</section>
								<section class="col col-4">
								  <label class="input"> <i class="icon-prepend icon-user"></i>
									<input type="text" name="fname" placeholder="<?php echo $lang['edit-clien6'] ?>">
								  </label>
								  <div class="note note-error"><?php echo $lang['edit-clien6'] ?></div>
								</section>
								<section class="col col-4">
								  <label class="input"> <i class="icon-prepend icon-user"></i>
									<input type="text" name="lname" placeholder="<?php echo $lang['edit-clien7'] ?>">
								  </label>
								  <div class="note note-error"><?php echo $lang['edit-clien7'] ?></div>
								</section>
							</div>
							
							<div class="row">
								<section class="col col-3">
									<label class="input">
									<input class="form-control" name="code_phone" list="browsers6" autocomplete="off" required="required" placeholder="Select Code Phone">
										<datalist id="browsers6">									
											<option><?php echo $lang['edit-clien8'] ?></option>
											<option data-countrycode="ID" value="62">Indonesia (+62)</option>

										</datalist>
									</label>
								  <div class="note note-error"><?php echo $lang['edit-clien8'] ?></div>
								</section>
							
								<section class="col col-3">
								  <label class="input"> <i class="icon-prepend icon-phone"></i>
									<input type="text" name="phone" placeholder="<?php echo $lang['edit-clien9'] ?>">
								  </label>
								  <div class="note note-error"><?php echo $lang['edit-clien9'] ?></div>
								</section>
								<section class="col col-6">
								  <label class="input">
									<input type="text" name="address" placeholder="<?php echo $lang['edit-clien10'] ?>">
								  </label>
								  <div class="note note-error"><?php echo $lang['edit-clien10'] ?></div>
								</section>
								<section class="col col-2" style="display:none">
									<select name="gender" >						
										<option value="" >Choose option</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										<option value="Other">Other</option>
									</select>
								  <div class="note note-error">Gender</div>
								</section>
							</div>
							
							<div class="row">
								<section class="col col-4">
								  <label class="input">
									<input type="text" name="country" placeholder="Pilih Provinsi" list="browsers5" autocomplete="off" required="required">
									<datalist id="browsers5">
										<option value="DKI Jakarta">DKI Jakarta</option>
										<option value="Jogja">Jogja </option>
										<option value="Jawa Barat">Jawa Barat</option>
										<option value="Jawa Tengah">Jawa Tengah</option>
										<option value="Jawa Timur">Jawa Timur</option> 
									</datalist>
								  </label>
								  <div class="note note-error"><?php echo $lang['edit-clien12'] ?></div>
								</section>
								<section class="col col-4">
								  <label class="input">
									<input type="text" name="city" placeholder="<?php echo $lang['edit-clien13'] ?>">
								  </label>
								  <div class="note note-error"><?php echo $lang['edit-clien13'] ?></div>
								</section>
								<section class="col col-4">
								  <label class="input">
									<input type="text" name="postal" placeholder="<?php echo $lang['edit-clien14'] ?>">
								  </label>
								  <div class="note note-error"><?php echo $lang['edit-clien14'] ?></div>
								</section>
							</div>
							<hr>
							<div class="row">
								<section class="col col-4">
									<select name="userlevel" >
										<?php echo $user->getCustomerLevels();?>
									</select>
									<div class="note"><?php echo $lang['edit-clien15'] ?> <i class="icon-exclamation-sign  tooltip" data-title=""></i></div>
								</section>
								<section class="col col-5">
									<div class="inline-group">
										<label class="radio">
										  <input name="active" type="radio" value="y" checked="checked" >
										  <i></i><?php echo $lang['edit-clien16'] ?></label>
										<label class="radio">
										  <input type="radio" name="active" value="n" >
										  <i></i><?php echo $lang['edit-clien17'] ?></label>
										<label class="radio">
										  <input type="radio" name="active" value="b" >
										  <i></i><?php echo $lang['edit-clien18'] ?></label>
										<label class="radio">
										  <input type="radio" name="active" value="t">
										  <i></i><?php echo $lang['edit-clien19'] ?></label>
									</div>
									<div class="note"><?php echo $lang['edit-clien20'] ?></div>
								</section>
								<section class="col col-3">
									<div class="inline-group">
										<label class="radio">
										  <input name="newsletter" type="radio" value="1" checked="checked">
										  <i></i><?php echo $lang['edit-clien21'] ?></label>
										<label class="radio">
										  <input type="radio" name="newsletter" value="0" >
										  <i></i><?php echo $lang['edit-clien22'] ?></label>
									</div>
									<div class="note"><?php echo $lang['edit-clien23'] ?></div>
								</section>
							</div>
							<div class="row">
									<section class="col col-4">
										<label class="input">
										<input name="avatar" type="file" class="fileinput" >
										</label>
										<div class="note"><?php echo $lang['edit-clien33'] ?></div>
									</section>
								<section class="col col-3">
									<label class="checkbox">
										<input type="checkbox" name="notify" value="1">
										<i></i><?php echo $lang['edit-clien34'] ?></label>
									<div class="note note-info"><?php echo $lang['edit-clien35'] ?></div>
								</section>
							</div>
							<div class="row">
								<section class="col col-12">
									<label class="textarea">
										<textarea name="notes" placeholder="Customer Notes" rows="3"></textarea>
									</label>
									<div class="note note"><?php echo $lang['edit-clien36'] ?></div>
								</section>
							</div>
							<footer>
								<button class="button" name="dosubmit" type="submit"><?php echo $lang['edit-clien37'] ?><span><i class="icon-ok"></i></span></button>
								<a href="customer.php?do=main_client" class="button button-secondary"><span><i class="ti-share-alt"></i></span> <?php echo $lang['edit-clien30'] ?></a> 
							</footer>
							</form>
					</div>
				</div>
			</div>
			<!-- Column -->
		</div>
	</div>
</div>
<?php echo Core::doForm("processCustomer");?>
<?php break;?>
<?php default:?>

<?php $userrow = $user->getCustomers();?>

<div class="row">
	<!-- Column -->
	<div class="col-lg-12 col-xl-12 col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="zero_config" class="table table-bordered table-condensed table-hover table-striped">
						<thead>
							<tr>
								<th><b><?php echo $lang['edit-clien38'] ?></b></th>
								<th class="text-center"><b><?php echo $lang['edit-clien39'] ?></b></th>
								<th class="text-center"><b><?php echo $lang['edit-clien40'] ?></b></th>
								<th class="text-center"><b><?php echo $lang['edit-clien41'] ?></b></th>
								<th class="text-center"><b><?php echo $lang['edit-clien42'] ?></b></th>
								<th class="text-center"><b><?php echo $lang['edit-clien43'] ?></b></th>
							</tr>
						</thead>
						<div class="m-t-40">
							<div class="d-flex">
								<div class="mr-auto">
									<div class="form-group">
										<a href="customer.php?do=main_client&amp;action=add"><button type="button" class="btn btn-primary btn"><i class="ti-plus" aria-hidden="true"></i> <?php echo $lang['edit-clien44'] ?></button></a>
									</div>
								</div>
								
							</div>
						</div>
						<tbody>
							<?php if(!$userrow):?>
							<tr>
								<td colspan="7">
								<?php echo "
									<i align='center' class='display-3 text-warning d-block'><img src='assets/images/alert/ohh_manage_shipment.png' width='150' /></i>
									",false;?>
								</td>
							</tr>
							<?php else:?>
							<?php foreach ($userrow as $row):?>
							<tr>
								<td><?php echo $row->fname;?> <?php echo $row->lname;?></td>
								<td><?php echo $row->email;?></td>
								<td class="text-center"><?php echo userStatus($row->active, $row->id);?></td>
								<td class="text-center"><?php echo isAdmin($row->userlevel);?></td>
								<td class="text-center"><?php echo ($row->adate) ? $row->adate : "-/-";?></td>
								<td class="text-center">
									<a href="customer.php?do=newsletter&amp;emailid=<?php echo urlencode($row->email);?>"><button type="button" class="btn btn-sm btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="<?php echo $lang['edit-clien45'] ?>"><i class="ti-email" aria-hidden="true"></i></button></a>
									<a href="customer.php?do=main_client&amp;action=edit&amp;id=<?php echo $row->id;?>" ><button type="button" class="btn btn-sm btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="<?php echo $lang['edit-clien46'] ?>"><i class="ti-pencil" aria-hidden="true"></i></button></a>	
									<?php if($row->id == 1):?>
									<a id="item_<?php echo $row->id;?>" data-rel="<?php echo $row->username;?>"><button type="button" class="btn btn-sm btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Master Admin"><i class="ti-lock" aria-hidden="true"></i></button></a>
									<?php else:?>
									<a id="item_<?php echo $row->id;?>"   class="delete"  data-rel="<?php echo $row->username;?>"><button type="button" class="btn btn-sm btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="<?php echo $lang['edit-clien47'] ?>"><i class="ti-close" aria-hidden="true"></i></button></a>
									<?php endif;?>
							
								</td>
							</tr>
							<?php endforeach;?>
							<?php unset($row);?>
							<?php endif;?>
						</tbody>
					</table>
					<?php echo Core::doDelete("Delete User","deleteUser");?> 
				</div>
			</div>
		</div>
	</div>
	<!-- Column -->
</div>


<script type="text/javascript"> 
// <![CDATA[
$(document).ready(function () {
    $('a.activate').on('click', function () {
        var uid = $(this).attr('id').replace('act_', '')
        var text = "<i class=\"icon-warning-sign icon-3x pull-left\"></i>Are you sure you want to activate this user account?<br /><strong>Email notification will be sent as well</strong>";
        new Messi(text, {
            title: "Activate User Account",
            modal: true,
            closeButton: true,
            buttons: [{
                id: 0,
                label: "Activate",
                val: 'Y'
            }],
			  callback: function (val) {
				  $.ajax({
					  type: 'post',
					  url: "controller.php",
					  data: {
						  activateAccount: 1,
						  id: uid,
					  },
					  cache: false,
					  beforeSend: function () {
						  showLoader();
					  },
					  success: function (msg) {
						  hideLoader();
						  $("#msgholder").html(msg);
						  $('html, body').animate({
							  scrollTop: 0
						  }, 600);
					  }
				  });
			  }
        });
    });
    $("#search-input").on("keyup", function () {
        var srch_string = $(this).val();
        var data_string = 'userSearch=' + srch_string;
        if (srch_string.length > 3) {
            $.ajax({
                type: "POST",
                url: "controller.php",
                data: data_string,
                beforeSend: function () {
                    $('#search-input').addClass('loading');
                },
                success: function (res) {
                    $('#suggestions').html(res).show();
                    $("input").blur(function () {
                        $('#suggestions').fadeOut();
                    });
                    if ($('#search-input').hasClass("loading")) {
                        $("#search-input").removeClass("loading");
                    }
                }
            });
        }
        return false;
    });
    var dates = $('#fromdate, #enddate').datepicker({
        defaultDate: "+1w",
        changeMonth: false,
        numberOfMonths: 2,
        dateFormat: 'yy-mm-dd',
        onSelect: function (selectedDate) {
            var option = this.id == "fromdate" ? "minDate" : "maxDate";
            var instance = $(this).data("datepicker");
            var date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
            dates.not(this).datepicker("option", option, date);
        }
    });
});
// ]]>
</script>
<?php break;?>
<?php endswitch;?>