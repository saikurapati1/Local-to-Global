<?php
session_start();
include("../dbconnect.php");
if($_SERVER['REQUEST_METHOD']=='POST')
   {
      $uname=$_POST['uname'];
	  $pass=md5($_POST['pass']);
	  $loginsql=$DBcon->query("select a_id,a_email from admin where a_email='$uname' AND a_pass='$pass'");
	  $row=$loginsql->fetch_array();
	  $cnt=$loginsql->num_rows;
	  if($cnt == 1)
	     {
		    $a_id=$row['a_id'];
		    $_SESSION['admin']=$a_id;
			header("location:index.php");
         }
    else
	  {
	     echo "invalid username or password";
      }
	  }
    
	if(isset($_SESSION['admin']))
   {
     header("Location:index.php");
   }
   
	?>
	<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="admin">
    <!-- <meta name="author" content="Mosaddek"> -->
    <meta name="keyword" content="sell, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="" method="POST">
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
            <input type="text" class="form-control" name="uname"  id= "uname" placeholder="User email" >
            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
            
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
        

        </div>

          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Enter your password.</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                          <button class="btn btn-success" type="button">Submit</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->

      </form>

    </div><!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
