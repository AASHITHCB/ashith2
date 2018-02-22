<?php
session_start(); 
if(isset($_SESSION['doctor']))
{
header('location:drlogin.php');
}
elseif(isset($_SESSION['admin']))
{
header('location:adminhome.php');
}
?>

<html>
<head>
<link rel="stylesheet" href="css/style.css" />
<title>E-Health Solutions Pvt Ltd</title>
</head>
<body>
<!--Header Start-->
<div class="header">
<div class="logo">
<img src="images/logo.jpg" height="100"/>
</div>
<ul>
<li><a href="contact.php">CONTACT US</a></li>
<li><a href="gallery.php" class="active">GALLERY</a></li>
<li><a href="blog.php">BLOG</a></li>
<li><a href="about.php">ABOUT US</a></li>
<li><a href="index.php">HOME</a></li>
</ul>
</div>
<!--Header End-->
<!--Container Start-->
<div class="container"><br/>
<div class="inner-container">
<div class="image-zoom-container">
			<div class="zoom-container">
				<a href="images/img1.jpg">
					<img src="images/img1.png" />
				</a>
			</div>
			<div class="zoom-container">
				<a href="#">
					<img src="images/img2.jpg" />
				</a>
			</div>
			<div class="zoom-container">
				<img src="images/img3.jpg" />
				</a>
			</div>
			<div class="zoom-container">
				<a href="#">
					<img src="images/img4.jpg" />
				</a>
			</div>
			<div class="zoom-container">
				<a href="#">
					<img src="images/img5.jpg" />
				</a>
			</div>
			<div class="zoom-container">
				<a href="#">
					<img src="images/img6.jpg" />
				</a>
			</div>
			<div class="zoom-container">
				<a href="#">
					<img src="images/img7.jpg" />
				</a>
			</div>
			<div class="zoom-container">
				<a href="#">
					<img src="images/img8.jpg" />
				</a>
			</div>
			<div class="zoom-container">
				<a href="#">
					<img src="images/img9.jpg" />
				</a>
			</div>
            <div class="zoom-container">
				<a href="#">
					<img src="images/img10.png" />
				</a>
			</div>
            <div class="zoom-container">
				<a href="#">
					<img src="images/img11.jpg" />
				</a>
			</div>
            <div class="zoom-container">
				<a href="#">
					<img src="images/img12.jpg" />
				</a>
			</div>
		</div>
        </div><br/>
</div>
<!--Container End-->
<!--Footer Start-->
<div class="footer">
<br/>
<p>Designed and Developed By:<a href="http://www.facebook.com/">AASHITH C.B</a> & <a href="https://www.facebook.com/">RAVI TEJA</a></p>
</div>
<!--Footer End-->


</body>
</html>
