<?php
include("../config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
 {
$name=$_POST['bname'];
$desc=$_POST['bdesc'];
$_qry=mysql_query("insert into brand(b_name,b_desc)values('$name','$desc')");
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
