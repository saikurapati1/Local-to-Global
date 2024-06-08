<?php 
//error_reporting(0);
include "../config.php";
$email=$_POST['semail'];
$qry=mysql_query("select s_email from serviceprovider where s_email='".$email."'");
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
