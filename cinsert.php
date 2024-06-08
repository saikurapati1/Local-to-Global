<?php
include("../config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
 {
$name=$_POST['cname'];
$desc=$_POST['cdesc'];
$_qry=mysql_query("insert into category(c_nm,c_desc)values('$name','$desc')");
if($_qry == true)
{
 header("Location:index.php");
 
 }
 else
  {
    echo "not sucess".mysql_error();
   }
  }
 else
  {
 echo"fail";
   }
 ?>
