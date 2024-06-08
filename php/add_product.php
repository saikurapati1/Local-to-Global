<?php include('lock.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Katare">
    <meta name="keyword" content="Mipltools, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">
    <title> QR-Admin</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
      <!--right slidebar-->
      <link href="css/slidebars.css" rel="stylesheet">
	  	  	<!--Datepicker table-->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datetimepicker/css/datetimepicker.css" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
		<!-- validation js -->

</head>
  <body>
  <section id="container" >
      <!--header start-->
     <?php include("header.php")?>     
	 <!--header end-->
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
                <div class="row">
                    <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
						  Product Form
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal" id="productForm" name="productForm" action="imgupload.php" method="POST" enctype="multipart/form-data" >
                                <div class="form-group">
								   <div  class="col-lg-2 col-sm-2 control-label">Product Name  </div>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" name="pname" id="pname" placeholder="Product Name" value="">
                                      </div>
                                  </div>
								<div class="form-group">
										<div class="col-lg-2 col-sm-2 control-label">Manufacturing Date </div>
                                      <div class="col-lg-10">
									  <input class="form-control" size="16" type="date" value=""  name="pmdate" placeholder="Enter Manufacturing Date">
									  </div>
								</div>
								<div class="form-group">
									<div class="col-lg-2 col-sm-2 control-label">Expiry Date </div>
                                    <div class="col-lg-10">
									  <input class="form-control" size="16" type="date" value=""  name="pedate" placeholder="Enter Expiry Date">
									  
									</div>
								</div>
								<div class="form-group">
								<div class="col-lg-2 col-sm-2 control-label">Description</div>
                                      <div class="col-lg-10">
									  <textarea class="form-control" id="pdesc" name="pdesc" value="" placeholder="product description" value=""></textarea><br/>
									</div>
								</div>
										 <div class="form-group">
										<div class="col-lg-2 col-sm-2 control-label">Brand </div>
                                      <div class="col-lg-10">
									  
									  <select class="form-control" id="brand" name="brand">
<option value="">Select Brand </option>
<?php

$sqlbd=$DBcon->query("SELECT * FROM brand");
while($row=$sqlbd->fetch_array())
     {
		 $b_id=$row['b_id'];
		 $b_name=$row['b_name'];
?>
<option value="<?php echo $b_id;?>"><?php echo $b_name;?> </option>
 <?php } ?>

</select>

										 </div>
										 </div>
										 <div class="form-group">
										<div class="col-lg-2 col-sm-2 control-label">Choose Category </div>
                                      <div class="col-lg-10">
		<select class="form-control" id="cat" name="cat">
<option value="">Select category </option>
									 <?php
$sqlct=$DBcon->query("SELECT * FROM category");
while($row=$sqlct->fetch_array())
     {
		 $c_id=$row['c_id'];
		 $c_nm=$row['c_nm'];
?>
<option value="<?php echo $c_id;?>"><?php echo $c_nm;?> </option>
 <?php } ?></select>
									  
										 </div>
										 </div>
										 
										 <div class="form-group">
										<div class="col-lg-2 col-sm-2 control-label">Price </div>
                                      <div class="col-lg-10">
									  <input type="text" class="form-control" id="pprice" name="pprice" value="" placeholder="Enter Product Price" value="">
									  
										 </div>
										 </div>
										 <div class="form-group">
										<div class="col-lg-2 col-sm-2 control-label">Product NetWt </div>
                                      <div class="col-lg-10">
									  <input type="text" class="form-control" id="pnetwt" name="pnetwt" value="" placeholder="Enter Product Weight" value="">
									  
										 </div>
										 </div>
										  <div class="form-group">
										<div class="col-lg-2 col-sm-2 control-label">Product Image </div>
                                      <div class="col-lg-10">
									  <input type="file" class="form-control" id="upimg" name="upimg" value=""/><br/>
                                     </div>
										 </div>
										
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button type="submit" class="btn btn-danger">Submit</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!-- Right Slidebar start -->
    
      <!-- Right Slidebar end -->
      
  </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js" ></script>
  <!--right slidebar-->
  <script src="js/slidebars.min.js"></script>
    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
  <script type="text/javascript" src="assets/fuelux/js/spinner.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
  <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
  <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script type="text/javascript" src="assets/jquery-multi-select/js/jquery.multi-select.js"></script>
  <script type="text/javascript" src="assets/jquery-multi-select/js/jquery.quicksearch.js"></script>
  <script src="js/advanced-form-components.js"></script>
    <!--script for this page-->
    <script src="js/form-validation-script.js"></script>

<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript">
$(document).ready(function(){
	 $("#productForm").validate({
                rules:{
                 pname: "required",
                 pmdate:"required",
				 pedate:"required",
				 pdesc:"required",
				 brand:"required",
				 cat:"required",
				 pprice:"required",
				 pnetwt:"required",
				 upimg:"required"
				 
                },
                messages: {
				 pname: "Please Enter First Name",
                 pmdate:"Please Enter Manufacturing Date",
				 pedate:"Please Enter Expiry Date",
				 pdesc:"Description",
				 brand:"Please Choose Brand",
				 cat:"Please Choose Category",
				 pprice:"Please Enter Price",
				 pnetwt:"Please Enter Weights",
				 upimg:"Please Choose Image"
				 
				},
                	submitHandler: function(form) {
					alert("Product added successfully");
                    	form.submit();
                }
            });
        });
   
</script>
    <!--script for this page-->
  </body>
</html>