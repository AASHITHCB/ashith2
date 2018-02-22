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
<script src="js/js-image-slider.js" type="text/javascript"></script>
<title>eHealth Solutions Pvt Ltd</title>
</head>
<body>
<!--Header Start-->
<div class="header">
<div class="logo">
<img src="images/logo.jpg" height="100"/>
</div>
<ul>
<li><a href="contact.php">CONTACT US</a></li>
<li><a href="gallery.php">GALLERY</a></li>
<li><a href="blog.php">BLOG</a></li>
<li><a href="about.php">ABOUT US</a></li>
<li><a href="index.php" class="active">HOME</a></li>
</ul>
</div>
<!--Header End-->

<!--Slidet Start-->
 <div id="sliderFrame" class="sliderFrame">
        <div id="slider" class="slider">
            <img src="images/f.jpg" />
            
            <img src="images/b.jpg" />
            <img src="images/c.jpg" />
			<img src="images/d.jpg" />
			<img src="images/e.jpg" />
        </div>
       
    </div>
<!--Slider End-->

<!--Container Start-->
<div class="container"><br/>
<div class="inner-container"><br/>
<h1>WELCOME TO eHealth Solutions Pvt Ltd.</h1><br>
<ul>
<li>eHealth Solutions Pvt Ltd. has been established as a healthcare company in 2015.<br /></li>
<li>It is an ISO 9001:2008 certified company.<br /></li>
<li>It offers an extensive range of clinical diagnostic tests and occupational health check up.<br /></li>
<li>Operated by a team of highly skilled and committed professionals.</li>
<li>It has remained committed to its objective of providing high quality, accurate and reliable services in the field of occupational health & safety, industrial hygiene and toxicology.
</li>
</ul>
</div>
<div class="inner-container"><br/>
<h1>VISION AND MISSION</h1>
<br/>
<ul><h2>VISION</h2><li>eHealth Solutions Pvt Ltd.'s vision is to be the leading health services intermediary, recognized for our integrated health cost management solutions for the workers' compensation and auto liability/PIP markets.</li></ul>
<br/>
<ul><h2>MISSION</h2><li> 	
Healthcare Solutions has a clear and compelling mission to provide outcome-focused, customer-driven solutions to the workers' compensation and auto liability/PIP markets.</li><li> The organization is committed to ensuring that every client receives consistent and reliable services.</li></ul>

</div>
<div class="inner-container">
<br/>
<h1>OUR CLIENTS</h1>
<table>
<tr>
<td><img src="images/client/1.jpg"></td>
<td><img src="images/client/2.jpg"></td>
<td><img src="images/client/3.jpg"></td>
<td><img src="images/client/4.jpg"></td>
<td><img src="images/client/5.jpg"></td>
</tr>
<tr>
<td><img src="images/client/6.jpg"></td>
<td><img src="images/client/7.jpg"></td>
<td><img src="images/client/8.jpg"></td>
<td><img src="images/client/13.jpg"></td>
<td><img src="images/client/12.jpg"></td>
</tr>
</table>
</div>
<br/>
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
