<?php
include("lock.php");
if($_SERVER['REQUEST_METHOD']=='POST')
 {
$name=$_POST['sptname'];
$desc=$_POST['sptdesc'];
$id=$_POST['cat'];
$img=$_POST['logo'];
$_qry=mysql_query("insert into providertype(spt_typeheading,spt_desc,c_id,a_id,o_id,spt_logo)values('$name','$desc','$id','$a_id','1','$img')");
if($_qry == true)
{
 header("Location:providertype.php");
 
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
