<?php
if(isset($_GET['id']))
{
	require("db.php");
	$q="delete from contact where cid='".$_GET['id']."'";
	$r=mysql_query($q);
	header('location:adminhome.php');
}

?>