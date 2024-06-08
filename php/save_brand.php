<?php
include("lock.php");
if($_SERVER['REQUEST_METHOD']=='POST')
 {
$name=$_POST['bname'];
$desc=$_POST['bdesc'];
$id=$_POST['cat'];
$qry=$DBcon->query("insert into brand(b_name,b_desc,c_id,a_id)values('$name','$desc','$id','$a_id')");
if($qry == true)
{
 header("Location:add_brand.php");
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
