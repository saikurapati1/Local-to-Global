<?php
include('lock.php');
$spid=$_GET['s_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Katare">
    <meta name="keyword" content="Mipltools, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">
    <title> K-Admin</title>
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
		<script>
function isCharKey(evt)
      {
	 var charCode= (evt.which) ? evt.which : event.keyCode
         if (charCode!=8 &&(charCode >122  || charCode < 97) && (charCode < 65 || charCode > 90))
		 {
            	    return false;
		  }
         return true;
      }
</script>
<script>
function isNumberKey(evt)
      {
	     var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
		 {
            return false;
		  }
         return true;
      }
</script>
		<!-- validation js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<!-- end validation js -->
<!-- contact validation -->
<script type="text/javascript">
$(document).ready(function(){
	 $("#pro_id").validate({
                rules:{
                 pname: "required",
				 paddress: "required",
				 pcontact:{
			    		required:true,
			    		minlength:10
			   	},
				paltcnt:{
			    		required:true,
			    		minlength:10
			   	},
				  pmincharge:"required",
				  pland:"required",
				  pdesc:"required"
		    },
                messages: {
				pname: "Please Enter Name",
		 	    paddress: "Please Enter Address",
                pcontact:{
			    	required:"Please Enter Mobile Number ",
			    	minlength:"Mobile number should be 10 Digits"
			    	},
				paltcnt:{
			    	required:"Please Enter alternate Mobile Number ",
			    	minlength:"Mobile number should be 10 digits"
			    	},
				pmincharge: "Please Enter Charges",
				pland: "Please Enter Area",
			    pdesc:"Please Choose Provider Type"
				

				 },
                	submitHandler: function(form) {
		    	alert("Thank You For Joining with us!!!");
                    	form.submit();
                }
            });
        });
</script>
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
                               Service Provider
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal" id="pro_id" name="pro_id" action="proinsert.php" method="POST">
                                   <div class="form-group">
								   <?php
			$sql=mysql_query("select * from serviceprovider where a_id=$a_id AND s_id=$spid");
			$row=mysql_fetch_array($sql);
			$name=$row['s_name'];
			$addr=$row['s_address'];
			$contact=$row['s_contact'];
			$altcnt=$row['s_alternatecnt'];
			$email=$row['s_email'];
			$charge=$row['s_minvisit'];
			$landmark=$row['s_landmark'];
			$desc=$row['s_desc'];
			?>
								   <div  class="col-lg-2 col-sm-2 control-label">Name  </div>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" name="pname" id="pname" placeholder=" Enter Name" value="<?php echo $name;?>"/>
                                      </div>
                                  </div>
								  
								  <div class="form-group">
										<div class="col-lg-2 col-sm-2 control-label">Address </div>
                                      <div class="col-lg-10">
									  <input type="text" class="form-control" id="paddress" name="paddress" placeholder="Enter Address" value="<?php echo $addr;?>"/>
									  
										 </div>
										 </div>
								<div class="form-group">
										<div class="col-lg-2 col-sm-2 control-label">Contact </div>
                                      <div class="col-lg-10">
									  <input type="text" class="form-control" maxlength="10" onKeyPress="return isNumberKey(event);" id="pcontact" name="pcontact" value="<?php echo $contact;?>" placeholder="Enter contact"/>
									  
										 </div>
										 </div>
										 <div class="form-group">
										<div class="col-lg-2 col-sm-2 control-label">Alternate Contact</div>
                                      <div class="col-lg-10">
									  <input type ="text" class="form-control" maxlength="10" onKeyPress="return isNumberKey(event);" id="paltcnt" name="paltcnt" value="<?php echo $altcnt;?>" placeholder="Enter alternate contact"/></textarea><br/>
									  
										 </div>
										 </div>
										 <div class="form-group">
										<div class="col-lg-2 col-sm-2 control-label">Email</div>
                                      <div class="col-lg-10">
									  <input type="text" class="form-control" id="pemail" name="pemail" value="<?php echo $email;?>" placeholder="Enter Email"/>
									  
										 </div>
										 </div>
										 <div class="form-group">
										<div class="col-lg-2 col-sm-2 control-label">Minimum visit charges  </div>
                                      <div class="col-lg-10">
									  <input type="text" class="form-control" id="pmincharge" name="pmincharge" value="<?php echo $charge;?>" placeholder="Enter charges"/>
									  
										 </div>
										 </div>
										 <div class="form-group">
										<div class="col-lg-2 col-sm-2 control-label">Landmark</div>
                                      <div class="col-lg-10">
									  <input type="text" class="form-control" id="pland" name="pland" value="<?php echo $landmark;?>" placeholder="Enter area of work"/>
									  
										 </div>
										 </div>
										 <div class="form-group">
										<div class="col-lg-2 col-sm-2 control-label">Description</div>
                                      <div class="col-lg-10">
									  <input type="text" class="form-control" id="pdesc" name="pdesc" value="<?php echo $desc;?>" placeholder="Enter Type of work"/>
<input type="hidden" class="form-control" id="s_id" name="s_id" value="<?php echo $spid;?>" placeholder=""/>
									  
										
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
      <div class="sb-slidebar sb-right sb-style-overlay">
          <h5 class="side-title">Online Customers</h5>
          <ul class="quick-chat-list">
              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <img alt="" src="img/chat-avatar2.jpg" class="media-object">
                      </a>
                      <div class="media-body">
                          <strong>John Doe</strong>
                          <small>Dream Land, AU</small>
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <img alt="" src="img/chat-avatar.jpg" class="media-object">
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                              <span class=" badge bg-important">3</span>
                          </div>
                          <strong>Jonathan Smith</strong>
                          <small>United States</small>
                      </div>
                  </div><!-- media -->
              </li>

              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <img alt="" src="../img/pro-ac-1.png" class="media-object">
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                              <span class=" badge bg-success">5</span>
                          </div>
                          <strong>Jane Doe</strong>
                          <small>ABC, USA</small>
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <img alt="" src="img/avatar1.jpg" class="media-object">
                      </a>
                      <div class="media-body">
                          <strong>Anjelina Joli</strong>
                          <small>Fockland, UK</small>
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <img alt="" src="img/mail-avatar.jpg" class="media-object">
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                              <span class=" badge bg-warning">7</span>
                          </div>
                          <strong>Mr Tasi</strong>
                          <small>Dream Land, USA</small>
                      </div>
                  </div><!-- media -->
              </li>
          </ul>
          <h5 class="side-title"> pending Task</h5>
          <ul class="p-task tasks-bar">
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Dashboard v1.3</div>
                          <div class="percent">40%</div>
                      </div>
                      <div class="progress progress-striped">
                          <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success">
                              <span class="sr-only">40% Complete (success)</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Database Update</div>
                          <div class="percent">60%</div>
                      </div>
                      <div class="progress progress-striped">
                          <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning">
                              <span class="sr-only">60% Complete (warning)</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Iphone Development</div>
                          <div class="percent">87%</div>
                      </div>
                      <div class="progress progress-striped">
                          <div style="width: 87%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info">
                              <span class="sr-only">87% Complete</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Mobile App</div>
                          <div class="percent">33%</div>
                      </div>
                      <div class="progress progress-striped">
                          <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-danger">
                              <span class="sr-only">33% Complete (danger)</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Dashboard v1.3</div>
                          <div class="percent">45%</div>
                      </div>
                      <div class="progress progress-striped active">
                          <div style="width: 45%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar">
                              <span class="sr-only">45% Complete</span>
                          </div>
                      </div>

                  </a>
              </li>
              <li class="external">
                  <a href="#">See All Tasks</a>
              </li>
          </ul>
      </div>
      <!-- Right Slidebar end -->
      <!--footer start--
      <footer class="site-footer">
          <div class="text-center">
              2013 &copy; Katare Informatics
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      --footer end-->
  </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
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
  </body>
<!-- Mirrored from thevectorlab.net/flatlab/form_validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Feb 2015 10:27:57 GMT -->
</html>