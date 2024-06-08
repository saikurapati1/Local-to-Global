<?php
include("../dbconnect.php");
if($_SERVER['REQUEST_METHOD']=='POST')
 {
$name=$_POST['cname'];
$desc=$_POST['cdesc'];
$qry=$DBcon->query("insert into category(c_nm,c_desc,a_id)values('$name','$desc','$a_id')");
if($qry == true)
{
 header("Location:add_category.php");
 
 }
 else
  {
    echo "not sucess";
   }
  }
 else
  {
 echo"fail";
   }
 ?>
