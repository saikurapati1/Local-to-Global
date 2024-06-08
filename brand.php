<html>
<body>
<!-- validation js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<!-- end validation js -->
<!-- contact validation -->
				 <script type="text/javascript">
$(document).ready(function(){
	 $("#b_id").validate({
                rules:{
                  bname: "required",
				  bdesc: "required",					   
                },
                messages: {
						bname: "Please Enter Category Name",
						bdesc: "Please enter Description"
                },
                	submitHandler: function(form) {
                    	form.submit();
                }
            });
        });
</script>
<form  id="b_id" action ="binsert.php" name="b_id" method="POST">
<input type="text"   id="bname" name="bname" value="" placeholder="Enter Brand Name"/> </br>
<textarea id="bdesc" name="bdesc" value="" placeholder="Description"></textarea> </br>
<input type="submit"   value="SUBMIT" /></br>
</form>
</body>
</html>