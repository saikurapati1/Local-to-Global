<?php
include("lock.php");
if($_SERVER['REQUEST_METHOD']=='POST')
 {
$name=$_POST['pname'];
$addr=$_POST['paddress'];
$cnt=$_POST['pcontact'];
$altcnt=$_POST['paltcnt'];
$email=$_POST['pemail'];
$pmincharge=$_POST['pmincharge'];
$land=$_POST['pland'];
$desc=$_POST['pdesc'];
$sid=$_POST['s_id'];
$qry=mysql_query("UPDATE serviceprovider SET s_name='$name', s_address='$addr', s_contact='$cnt', s_alternatecnt='$altcnt', s_email='$email', s_desc='$desc', s_minvisit='$pmincharge', s_landmark='$land' WHERE s_id='$sid'" );
if($qry == true)
{
 header("Location:providerlist.php");
 
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
