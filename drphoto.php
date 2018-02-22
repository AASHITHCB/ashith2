<?php
session_start();
include_once('config.php');
if(!isset($_SESSION['doctor']))
{
header('location:drlogin.php');
}

$name=$_SESSION['doctor'];

if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"images/"."dr" . $_FILES["image"]["name"]);
			
			$location="images/" ."dr". $_FILES["image"]["name"];
			
			$save=mysql_query("UPDATE doctor SET location='$location' WHERE druname='$name'");
			
			header("location: doctorhome.php");
			exit();					
	}
?>
