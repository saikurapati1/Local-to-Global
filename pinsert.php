<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
 {
$name=$_POST['pname'];
$date=$_POST['pmdate'];
$edate=$_POST['pedate'];
$desc=$_POST['pdesc'];
$brand=$_POST['pbrand'];
$price=$_POST['pprice'];
$weight=$_POST['pnetwt'];
$_qry=mysql_query("insert into product(p_name,p_manufacturerdate,p_expirytdate,p_price,p_brand,p_desc,p_netwt)values('$name','$date','$edate','$price','$brand','$desc','$weight')");
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
