<?php
include("lock.php");
if($_SERVER['REQUEST_METHOD']=='GET')
 {
$p_id=$_GET['p_id'];
$qry=$DBcon->query("UPDATE product SET  p_flag =  '1' WHERE  p_id ='$p_id'");
if($qry == true)
{
 header("Location:product_list.php");
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
