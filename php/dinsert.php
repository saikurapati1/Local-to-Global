<?php
include("lock.php");
if($_SERVER['REQUEST_METHOD']=='POST')
 {
$name=$_POST['name'];
$contact=$_POST['contact'];
$altcontact=$_POST['altcnt'];
$email=$_POST['email'];
$addr=$_POST['addr'];
$pass=md5($_POST['pass']);
$_qry=mysql_query("insert into dealer (a_id,d_name,d_contact,d_altcnt,d_email,d_addr,d_pass,d_flag)values('$a_id','$name','$contact','$altcontact','$email','$addr','$pass','1')");
if($_qry == true)
{
 header("Location:login.php");
 
 }
 else
  {
    echo "not sucess".mysql_error();
   }
  }
 else
  {
 echo"registration faisl";
   }
 ?>
