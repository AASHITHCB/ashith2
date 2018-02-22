<?php
session_start(); 
include('config.php');
if(!isset($_SESSION['doctor']))
{
header('location:drlogin.php');
}
elseif(isset($_SESSION['admin']))
{
header('location:adminhome.php');
}

if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"images/"."blog" . $_FILES["image"]["name"]);
			date_default_timezone_set('Asia/Kolkata');
			$date=date('y/m/d h:i:s a',time());
			$name=$_SESSION['doctor'];
			$location="images/" ."blog". $_FILES["image"]["name"];
			$caption=$_POST['caption'];
			$desc=$_POST['txtDescription'];
			if(isset($_POST['txtDescription']))
			{
			?>
			<script language="javascript">
			alert("<?php echo $_POST['txtDescription']; ?>");
			</script>
			<?php
			}
			
			$save=mysql_query("INSERT INTO photos (date, druname, location, caption, description) VALUES ('$date','$name','$location','$caption','$desc')");
			header("location: photo.php");
			exit();					
	}
?>
