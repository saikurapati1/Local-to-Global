<?php include("lock.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="katareinfo, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Product list</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet"/>
      <!--right slidebar-->
      <link href="css/slidebars.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" class="">
      <!--header start-->
      <?php 
	  include("header.php");
	  ?>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-md-3">
                      <section class="panel">
                          <div class="panel-body">
                              <input type="text" placeholder="Keyword Search" class="form-control">
                          </div>
                      </section>
                      <section class="panel">
                          <header class="panel-heading">
                              Category
                          </header>
                          <div class="panel-body">
                              <ul class="nav prod-cat">
                                  <li>
                                      <a href="#" class="active"><i class=" fa fa-angle-right"></i> Dress</a>
                                      <ul class="nav">
                                          <li class="active"><a href="#">- Shirt</a></li>
                                          <li><a href="#">- Pant</a></li>
                                          <li><a href="#">- Shoes</a></li>
                                      </ul>
                                  </li>
                                  <li><a href="#"><i class=" fa fa-angle-right"></i> Bags & Purses</a></li>
                                  <li><a href="#"><i class=" fa fa-angle-right"></i> Beauty</a></li>
                                  <li><a href="#"><i class=" fa fa-angle-right"></i> Coat & Jacket</a></li>
                                  <li><a href="#"><i class=" fa fa-angle-right"></i> Jeans</a></li>
                                  <li><a href="#"><i class=" fa fa-angle-right"></i> Jewellery</a></li>
                                  <li><a href="#"><i class=" fa fa-angle-right"></i> Electronics</a></li>
                                  <li><a href="#"><i class=" fa fa-angle-right"></i> Sports</a></li>
                                  <li><a href="#"><i class=" fa fa-angle-right"></i> Technology</a></li>
                                  <li><a href="#"><i class=" fa fa-angle-right"></i> Watches</a></li>
                                  <li><a href="#"><i class=" fa fa-angle-right"></i> Accessories</a></li>
                              </ul>
                          </div>
                      </section>
                      <section class="panel">
                          <header class="panel-heading">
                              Price Range
                          </header>
                          <div class="panel-body sliders">
                              <div id="slider-range" class="slider"></div>
                              <div class="slider-info">
                                  <span id="slider-range-amount"></span>
                              </div>
                          </div>
                      </section>
                      <section class="panel">
                          <header class="panel-heading">
                              Filter
                          </header>
                          <div class="panel-body">
                              <form role="form product-form">
                                  <div class="form-group">
                                      <label>Brand</label>
                                      <select class="form-control">
                                          <option>Wallmart</option>
                                          <option>Catseye</option>
                                          <option>Moonsoon</option>
                                          <option>Textmart</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <label>Color</label>
                                      <select class="form-control">
                                          <option>White</option>
                                          <option>Black</option>
                                          <option>Red</option>
                                          <option>Green</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <label>Type</label>
                                      <select class="form-control">
                                          <option>Small</option>
                                          <option>Medium</option>
                                          <option>Large</option>
                                          <option>Extra Large</option>
                                      </select>
                                  </div>
                                  <button class="btn btn-primary" type="submit">Filter</button>
                              </form>
                          </div>
                      </section>
                      <section class="panel">
                          <header class="panel-heading">
                              Best Seller
                          </header>
                          <div class="panel-body">
                              <div class="best-seller">
                                  <article class="media">
                                      <a class="pull-left thumb p-thumb">
                                          <img src="img/product1.jpg">
                                      </a>
                                      <div class="media-body">
                                          <a href="#" class=" p-head">Item One Tittle</a>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                      </div>
                                  </article>
                                  <article class="media">
                                      <a class="pull-left thumb p-thumb">
                                          <img src="img/product2.png">
                                      </a>
                                      <div class="media-body">
                                          <a href="#" class=" p-head">Item Two Tittle</a>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                      </div>
                                  </article>
                                  <article class="media">
                                      <a class="pull-left thumb p-thumb">
                                          <img src="img/product3.png">
                                      </a>
                                      <div class="media-body">
                                          <a href="#" class=" p-head">Item Three Tittle</a>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                      </div>
                                  </article>
                              </div>
                          </div>
                      </section>
                  </div>
                  <div class="col-md-9">
                      <section class="panel">
                          <div class="panel-body">
                              <div class="pro-sort">
                                  <label class="pro-lab">Sort By</label>
                                  <select class="styled" >
                                      <option>Default Sorting</option>
                                      <option>Popularity</option>
                                      <option>Average Rating</option>
                                      <option>Newness</option>
                                      <option>Price Low to High</option>
                                      <option>Price High to Low</option>
                                  </select>
                              </div>
                              <div class="pro-sort">
                                  <label class="pro-lab">Show</label>
                                  <select class="styled" >
                                      <option>Result Per Page</option>
                                      <option>2 Per Page</option>
                                      <option>4 Per Page</option>
                                      <option>6 Per Page</option>
                                      <option>8 Per Page</option>
                                      <option>10 Per Page</option>
                                  </select>
                              </div>

                              <div class="pull-right">
                                  <ul class="pagination pagination-sm pro-page-list">

                                      <li><a href="#">1</a></li>
                                      <li><a href="#">2</a></li>
                                      <li><a href="#">3</a></li>
                                      <li><a href="#">»</a></li>
                                  </ul>
                              </div>
                          </div>
                      </section>

                      <div class="row product-list">
						  <?php
										  $sql=mysql_query("select a.d_id,a.ad_img,d.d_name
										  from advertisement a, dealer d
										  where a.a_id=$a_id
										  AND a.d_id=d.d_id  
										  ");
                                          while($row=mysql_fetch_array($sql))
                                               {
												   $ad_img=$row["ad_img"];
												   $d_name=$row["d_name"];
												   
											   ?>
                          <div class="col-md-4">
                              <section class="panel">
                                  <div class="pr o-img-box">
                                      <img style="height: 191px;" src="../admin/advr/<?php echo $ad_img;?>" alt=""/>
                                      
                                  </div>

                                  <div class="panel-body text-center">
                                      <h4>
                                          <a href="#" class="pro-title";>Dealer Name:-
                                            <?php echo $d_name;?>
                                          </a>
                                      </h4>
                                      
									  
                                  </div>
                              </section>
                          </div>
											   <?php } ?>
                      </div>
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
                          <img alt="" src="img/pro-ac-1.png" class="media-object">
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

      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2013 &copy; katareinfo by katareinfo.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
	  </section><!-- js placed at the end of the document so the pages load faster -->
     <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <script src="js/jquery.customSelect.min.js" ></script>
    <script src="js/respond.min.js" ></script>

    <!--right slidebar-->
    <script src="js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/count.js"></script>
      <script type="text/javascript">
          $(document).ready(function() {
              $(function(){
                  $('select').customSelect();
              });
          });
      </script>
  </body>
</html>
