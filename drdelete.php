<?php
if(isset($_GET['id']))
{
	require("db.php");
	$q="delete from doctor where doctor_id='".$_GET['id']."'";
	$r=mysql_query($q);
	header('location:doctor.php');
}

?>