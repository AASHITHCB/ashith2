<?php
include('config.php');
if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"images/"."dr" . $_FILES["image"]["name"]);
			
			$location="images/" ."dr". $_FILES["image"]["name"];
			$doctor_name=$_POST['txtdrname'];
			$drdeg=$_POST['txtdrdeg'];
			$druname=$_POST['txtdruname'];
			$drpass=$_POST['txtdrpass'];
			$dremail=$_POST['txtdremail'];
			$drphone=$_POST['txtdrphone'];
			$drprf=$_POST['txtdrprf'];	
			
			$save=mysql_query("INSERT INTO doctor (location,doctor_name,drdeg,druname,drpass,dremail,drphone,drprf) VALUES ('$location','$doctor_name','$drdeg','$druname','$drpass','$dremail','$drphone','$drprf')");
			header("location: doctor.php");
			exit();					
	}
?>
