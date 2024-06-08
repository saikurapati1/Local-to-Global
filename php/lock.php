<?php date_default_timezone_set('Asia/Kolkata');
session_start();
require_once("../dbconnect.php");
$a_id=$_SESSION['admin'];
$ses_sql=$DBcon->query("select a_name from admin where a_id='$a_id'");
$row=$ses_sql->fetch_array();
 $a_name=$row['a_name'];
if(!isset($_SESSION['admin']))
   {
     header("Location:login.php");
   }
  ?>