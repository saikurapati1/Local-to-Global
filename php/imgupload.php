<?php
include('lock.php');
$path="uploads/";
$valid_formats=array("jpg","png","gif","bmap","JPG","jpeg",);
if(isset($_POST)and $_SERVER['REQUEST_METHOD']=="POST")
{

$name=$_POST['pname'];
$date=$_POST['pmdate'];
$edate=$_POST['pedate'];
$desc=$_POST['pdesc'];
$price=$_POST['pprice'];
$weight=$_POST['pnetwt'];
$id=$_POST['brand'];
$cid=$_POST['cat'];
$time=time();
$token=md5($time);
$actual_image_name=$_FILES['upimg']['name'];
$naming=$time.$actual_image_name;
$size=$_FILES['upimg']['size'];
$tmp=$_FILES['upimg']['tmp_name'];
$ext=explode(".",$actual_image_name);
if(in_array($ext[1],$valid_formats))
  {
    if(move_uploaded_file($tmp,$path.$naming))
	   {
	     $qry=$DBcon->query("insert into product(b_id,c_id,a_id,p_name,p_manufacturerdate,p_expirytdate,p_price,p_desc,p_netwt,p_proimg,token,p_time)
		 values('$id','$cid','$a_id','$name','$date','$edate','$price','$desc','$weight','$naming','$token',$time)");
		header("Location:add_product.php");
		}
	else
	  {
	    echo "Not Successfully";
	}
	}
	else
	  {
	     echo "no valid image";
		}
		}
		?>