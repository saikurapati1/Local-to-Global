<?php 
//error_reporting(0);
require_once("lock.php");
$outh_url=$_GET['source_ref'];
if(empty($_GET['source_ref'])) {
  header("location: 404");
}
else{
	$grandtotal="0"; 
$cr=$DBcon->query("SELECT c.*,p.*
FROM cart c, product p
WHERE c.p_id=p.p_id
AND c.on_id ='$outh_url'");
$ocnt=$cr->num_rows;		
	if($ocnt<=0){
	 header("location: 404");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Katareinfo">
    <meta name="keyword" content="Katareinfo, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Invoice</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
      <!--right slidebar-->
      <link href="css/slidebars.css" rel="stylesheet">
      <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/invoice-print.css" rel="stylesheet" media="print">
  </head>

  <body>

  <section id="container" class="">
      <!--header start-->
<?php require_once("header.php"); ?>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- invoice start-->
              <section>
                  <div class="panel panel-primary">
                      <!--<div class="panel-heading navyblue"> INVOICE</div>-->
                      <div class="panel-body">
                          <div class="row invoice-list">
                              <div class="text-center corporate-id">
                                  <img style="width:20%;" src="img/lg.png" alt="">
                              </div>
                          </div>
                          <table class="table table-striped table-hover">
                              <thead>
							  
                              <tr>
                                  <th>#</th>
                                  <th>Item</th>
								   <th>Item Name</th>
                                  <th>Unit Cost</th>
                                  <th>Quantity</th>
                              </tr>
                              </thead>
                              <tbody>
							<?php $grandtotal="";
						while($cartdata=$cr->fetch_array()){
							$p_id=$cartdata['p_id'];
							$p_name=$cartdata['p_name'];
							$p_price=$cartdata['p_price'];
							$p_proimg=$cartdata['p_proimg'];
						$cr_id=$cartdata['cr_id'];
						$ocode=$cartdata['o_code'];
							$u_id=$cartdata['u_id'];
						$o_auth=md5($ocode.$u_id);
						$cr_tot=$cartdata['cr_tot'];
						$cr_qty=$cartdata['cr_qty'];
						$on_id=$cartdata['on_id'];
						$grandtotal += $cr_tot;
						?>
                              <tr>
							  <div class="store-history-item">
                                  <td>#</td>
                                  <td><div class="men-thumb-item text-center" style="height: 120px; width: 200px; position: relative; margin: 0 auto;">
										
											<img  style="position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    top: 0;
    margin: 16px 10px 0px 48px;
    opacity: 1;
    max-width: 40%;
	  max-height: 100%;
    box-sizing: content-box;
    " src="uploads/<?php echo $p_proimg;?>" alt=""/>
										</div></td>
                                  <td ><?php echo $p_name; ?></td>
                                  <td class=""><i class="fa fa-inr"></i> <?php echo $cr_tot; ?></td>
                                  <td class=""><?php echo $cr_qty; ?></td>
                              </tr>
							 <?php } ?>
                              </tbody>
                          </table>
                          <div class="row">
                              <div class="col-lg-4 invoice-block pull-right">
                <ul class="unstyled amounts">
					<li><strong>Order ID :</strong><?php echo $on_id; ?></li>
                    <li><strong>Total amount :</strong><?php echo $grandtotal; ?></li>
					<li><strong>Delivery :</strong> Rs. 40.00/-</li>
					<li><strong>Grand Total amount :</strong><?php echo $grandtotal+40; ?></li>
                </ul>
                              </div>
                          </div>
                          <div class="text-center invoice-btn">
                              <a class="btn btn-info btn-lg" onclick="javascript:window.print();"><i class="fa fa-print"></i> Print </a>
                          </div>
                      </div>
                  </div>
              </section>
              <!-- invoice end-->
          </section>
      </section>
      <!--main content end-->
      <!-- Right Slidebar end -->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2023 &copy; Virtual Shopping group
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
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
		<script type="text/javascript">
function done(on_id){ 
		if (confirm("Complete This Order") == true) {
	$.ajax({
            type: 'POST',
            url: 'cmpob.php',
            data: {on_id:on_id},
            success: function(data){ 
			if(data == "Success")
		{ 
			$('#sucess').text("Order successfully Completed");
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
