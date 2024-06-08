<?php
include("lock.php");
if($_SERVER['REQUEST_METHOD']=='POST')
 {
$addr=$_POST['addr'];
$altcnt=$_POST['altcnt'];
$pass=md5($_POST['pass']);
$d_id=$_POST['d_id'];
$qry=mysql_query("UPDATE dealer SET d_addr='$addr', d_altcnt='$altcnt',d_pass='$pass' WHERE d_id=$d_id" );
if($qry == true)
{
 header("Location:dlist.php");
 
 }
 else
  {
    echo "not sucess".mysql_error();
   }
  }
 else
  {
 echo"registration faisl";
   }
 ?>
