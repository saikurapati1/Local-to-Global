<?php
include('lock.php');
$path="advr/";
$valid_formats=array("jpg","png","gif","bmap","JPG");
if(isset($_POST)and $_SERVER['REQUEST_METHOD']=="POST")
{
$name=$_POST['adname'];
$desc=$_POST['addesc'];
$time=time();
$actual_image_name=$_FILES['adimg']['name'];
$naming=$time.$actual_image_name;
$size=$_FILES['adimg']['size'];
$tmp=$_FILES['adimg']['tmp_name'];
$ext=explode(".",$actual_image_name);
if(in_array($ext[1],$valid_formats))
   { 
    if(move_uploaded_file($tmp,$path.$naming))
	   {
	     $qry=$DBcon->query("INSERT INTO advertisement (a_id,ad_head,ad_desc,ad_img) values ('$a_id','$name','$desc','$naming')");
		header("Location:advertisement.php");
		}
	else
		{
	    echo "Not Successfully";
		}
	}
	else
	  {
	     echo "no";
		}
		}
		?>