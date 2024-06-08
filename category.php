<html>
<body>
<!-- validation js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<!-- end validation js -->
<!-- contact validation -->
				 <script type="text/javascript">
$(document).ready(function(){
	 $("#cat_id").validate({
                rules:{
                  cname: "required",
				 cdesc: "required",					   
                },
                messages: {
						cname: "Please Enter Category Name",
						cdesc: "Please enter Description"
                },
                	submitHandler: function(form) {
                    	form.submit();
                }
            });
        });
</script>
<form  id="cat_id" action ="cinsert.php" name="cat_id" method="POST">
<input type="text"   id="cname" name="cname" value="" placeholder="Choose Category"/> </br>
<textarea id="cdesc" name="cdesc" value="" placeholder="Description"></textarea> </br>
<input type="submit"   value="SUBMIT" /></br>
</form>
</body>
</html>