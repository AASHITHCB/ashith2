<?php
session_start();
include_once('config.php');
if(!isset($_SESSION['doctor']))
{
header('location:drlogin.php');
}
elseif(isset($_SESSION['admin']))
{
header('location:adminhome.php');
}

$name=$_SESSION['doctor'];


			$dremail=$_POST['txtdremail'];
			$drphone=$_POST['txtdrphone'];
			$drprf=$_POST['txtdrprf'];	
			$save=mysql_query("UPDATE doctor SET dremail='$dremail', drphone='$drphone', drprf='$drprf' WHERE druname='$name'");
			
			header("location: doctorhome.php");					
?>
