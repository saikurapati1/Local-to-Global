<?php
include("lock.php");
if($_SERVER['REQUEST_METHOD']=='POST')
 {
$name=$_POST['sname'];
$address=$_POST['saddress'];
$contact=$_POST['scontact'];
$altcnt=$_POST['saltcnt'];
$email=$_POST['semail'];
$mincharge=$_POST['smincharge'];
$desc=$_POST['twork'];
$landmark=$_POST['sareawork'];
$spt_id=$_POST['spt'];
$reg=$_POST['regdate'];
$qry=mysql_query("insert into serviceprovider(spt_id,s_name,s_address,s_contact,s_alternatecnt,s_email,s_desc,s_landmark,reg_date,s_minvisit,a_id)values('$spt_id','$name','$address','$contact','$altcnt','$email','$desc','$landmark','$reg','$mincharge','$a_id')");
if($qry == true)
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
