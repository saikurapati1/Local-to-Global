
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<!-- validation js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<!-- end validation js -->
<!-- contact validation -->
<script type="text/javascript">
$(document).ready(function(){
	 $("#cust_id").validate({
                rules:{
                 name: "required",
				 addr: "required",
		    	contact:{
			    		required:true,
			    		minlength:10
			   	},
				altcnt:{
			    		required:true,
			    		minlength:10
			   	},
                    email: {
                               required: true,
                               email:true,
				remote:{
			url: 'dvalidemail.php',
			type: "POST"
       			}
                           }, 
			pass: {
                        required:true,
			    		minlength:5
                    			},						   
                },
                messages: {
				name: "Please Enter First Name",
		 		addr: "Please enter Address",
				contact:{
			    	required:"Please enter Mobile number ",
			    	minlength:"Mobile number should be 10 digits"
			    	},
					altcnt:{
			    	required:"Please Enter Alternate Mobile number ",
			    	minlength:"Mobile number should be 10 digits"
			    	},
					email:{
                        	required:"Please enter Email.",
                        	remote:"Email Id already registered."
                        	}, 
					pass: {
                        		required: "Please provide a password",
                        		minlength: "Your password must be  5 characters long"
		       
                    			},
                },
                	submitHandler: function(form) {
		    	alert("Thank You For Joining with us!!!");
                    	form.submit();
                }
            });
        });
</script>
</head>

<body class="login-body">

    <div class="container">

      <form id="cust_id" class="form-signin" action="dinsert.php" name="cust_id" method="POST">
        <h2 class="form-signin-heading">registration now</h2>
        <div class="login-wrap">
            <p>Enter your personal details below</p>
            <input type="text" class="form-control" placeholder="Full Name" id="name" name="name" value=""/>
			<input type="text" class="form-control" placeholder="Address" id="addr" name="addr" value=""/>
			<input type="text" class="form-control" maxlength="10" placeholder="Mobile No" id="contact" name="contact" value=""/>
			<input type="text" class="form-control" maxlength="10" placeholder=" Alternate Mobile No" id="altcnt" name="altcnt" value=""/>
			<input type="text" class="form-control" placeholder="Email" id="email" name="email"value="" />
			<input type="password" class="form-control"  id="pass" name="pass" placeholder="Password" value=""/>            
           <button class="btn btn-lg btn-login btn-block" type="submit" value="SUBMIT" >Submit</button>
		

            <div class="registration">
                Already Registered.
                <a class="" href="login.php">
                    Login
                </a>
            </div>
        </div>
      </form>
    </div>
  </body>
</html>
