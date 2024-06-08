<?php 
//error_reporting(0);
include "lock.php";
$email=$_POST['email'];
$qry=mysql_query("select d_email from dealer where d_email='".$email."'");
$count=mysql_num_rows($qry);
if($count>=1)
{
	echo "false";
}
else
{
	echo "true";
}       
?>
