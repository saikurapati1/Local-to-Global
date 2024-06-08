<?php
include("lock.php");
$sql=mysql_query("select * from dealer");
while($row=mysql_fetch_array($sql))
{
	$d_name=$row["d_name"];
	$d_addr=$row["d_addr"];
	$d_contact=$row["d_contact"];
	$d_email=$row["d_email"];
	$d_pass=$row["d_pass"];
	?>

	<li><?php echo $d_name;?></li>
	<li><?php echo $d_addr;?></li>
	<li><?php echo $d_contact;?></li>
	<li><?php echo $d_email;?></li>
	<li><?php echo $d_pass;?></li>
	<?php } ?>
	