<?php
//error_reporting(0);
session_start();
if(isset($_SESSION['admin']));
  {
    unset($_SESSION['admin']);
	if(!isset($_SESSION['admin']));
       {
	       header("Location:login.php");
		}
   }
  ?>