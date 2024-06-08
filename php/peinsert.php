<?php
include("lock.php");
if($_SERVER['REQUEST_METHOD']=='POST')
 {
$name=$_POST['pname'];
$price=$_POST['pprice'];
$desc=$_POST['pdesc'];
$pid=$_POST['pid'];
$qry=$DBcon->query("UPDATE product SET p_name='$name', p_price='$price',p_desc='$desc' WHERE p_id=$pid" );
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
 echo"registration fails";
   }
 ?>
