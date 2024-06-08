<?php
include("lock.php");
if($_SERVER['REQUEST_METHOD']=='POST')
 {
$name=$_POST['pname'];
$date=$_POST['pmdate'];
$edate=$_POST['pedate'];
$desc=$_POST['pdesc'];
$brand=$_POST['pbrand'];
$price=$_POST['pprice'];
$weight=$_POST['pnetwt'];
$id=$_POST['b1'];
$cid=$_POST['cat'];
$qry=mysql_query("insert into product(p_name,p_manufacturerdate,p_expirytdate,p_price,up_price,p_brand,p_desc,p_netwt,b_id,c_id,a_id)values('$name','$date','$edate','$price','$price','$brand','$desc','$weight','$id','$cid','$a_id')");
if($qry == true)
{
 header("Location:add_product.php");
 
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
