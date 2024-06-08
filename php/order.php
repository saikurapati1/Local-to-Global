<?php require_once("lock.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title><?php echo TITLE; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="css/table-responsive.css" rel="stylesheet" />
      <!--right slidebar-->
      <link href="css/slidebars.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />  
     <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datetimepicker/css/datetimepicker.css" />
  </head>

  <body>

  <section id="container" class="">
      <!--header start-->
       <?php include"header.php"; ?>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12" id="edit_view">
                      <section class="panel">
                          <header class="panel-heading">
                              Order Request
                          </header>
                          <div class="panel-body">
                              <section id="no-more-tables">
                                  <table class="table table-bordered table-striped table-condensed cf">
                                      <thead class="cf">
										<tr>
                                         
                                            <th> Sr.No</th>
				  						    <th> User Name </th>
                                            <th> User Address</th>
                                            <th> User Contact</th>
										    <th> User Email</th>
											<th> Order ID</th>
										    <th>Total amount</th>
										    <th> Order Date</th>
											 <th> Action </th>
										</tr>
                                      </thead>
                                      <tbody>
<?php $ordhis = $DBcon->query("SELECT u.*,o.* FROM  obill o, user u WHERE o.u_id=u.u_id");
	$obcnt=$ordhis->num_rows;
						while($cartdata=$ordhis->fetch_array()){
						$o_id=$cartdata['o_id'];
						$u_name=$cartdata['u_name'];
						$u_cont=$cartdata['u_contact'];
						$u_email=$cartdata['u_email'];
						$ocode=$cartdata['o_code'];
						$o_addr=$cartdata['o_addr'];
						$o_auth=$cartdata['o_auth'];
						$o_tot=$cartdata['o_tot'];
						$ob_dt=date("d M Y h:i:a",$cartdata['ob_dt']);
				?>
                                      <tr>
                                          <td data-title="Sr.No"><?php echo $o_id ;?></td>
										   <td data-title="User name"><?php echo $u_name ;?></td>
										  <td  data-title="User Address"><?php $string = strip_tags($o_addr);

if (strlen($string) > 500) {

    // truncate string
    $stringCut = substr($string, 0, 500);

    // make sure it ends in a word so assassinate doesn't become ass...
    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
}
echo $string ; ?></td>
										  
										    <td data-title="User Contact"><?php echo $u_cont ;?></td>
											 <td data-title="User Email"><?php echo $u_email ;?></td>
											 <td data-title="Order Id"><?php echo $o_id ;?></td>
											  <td data-title="Total amount"><?php echo $o_tot ;?></td>
											    <td data-title="Sheduled Date"><?php echo $ob_dt ;?></td>
												<td data-title="Action">
												<a href="invoice?source_ref=<?php echo $o_id; ?>" class="btn btn-primary">View</a>
												</td>
                                      </tr>
									   <?php } ?>
                                     
                                      </tbody>
                                  </table>
                              </section>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
	 <div id="toast-container" style="display:none; " class="toast-top-right" aria-live="polite" role="alert"><div class="toast toast-success"><div class="toast-progress" style="width: 99.9218%;"></div><button type="button" class="toast-close-button" role="button">×</button><div class="toast-title">Toastr Notification</div><div id="sucess" class="toast-message"> </div></div></div>
	  <div  id="toast-container"style="display:none; " class="toast-top-center" aria-live="polite" role="alert"><div class="toast toast-error"><button type="button" class="toast-close-button" role="button">×</button><div class="toast-title">Error Notification</div><div id="error" class="toast-message"></div></div></div>
      <!--footer start-->
 
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/respond.min.js" ></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
	<script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
  <link href="assets/toastr-master/toastr.css" rel="stylesheet" type="text/css" />
  <!--right slidebar-->
  <script src="js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    <script src="js/advanced-form-components.js"></script>
	<script type="text/javascript">
function done(sbid){ 
		if (confirm("Complete This Service") == true) {
	$.ajax({
            type: 'POST',
            url: 'cmpsb.php',
            data: {sbid:sbid},
            success: function(data){ 
			if(data == "Success")
		{ 
			$('#sucess').text("Service successfully Completed");
			$('.toast-top-right').show();
			$('.toast-top-right').focus();
			$('.toast-top-right').fadeOut(5000); 
			location.reload();
		}
		else
		{ 
		//alert(data);
		 $('#error').text("Please Fill All Mandatory Fields");
			$('.toast-top-center').show();
			$('.toast-top-center').focus();
			$('.toast-top-center').fadeOut(5000);
			//$('#fform')[0].reset();
		}
		}                                    	  
         });  
	}else{
			$('#error').text("Completion Failed");
			$('.toast-top-center').show();
			$('.toast-top-center').focus();
			$('.toast-top-center').fadeOut(5000);
			//$('#fform')[0].reset();
	}	 
	}
</script>
  </body>
</html>
