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
<script src="js/jquery.min.js"></script>
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
<li><a href="gallery.php">GALLERY</a></li>
<li><a href="blog.php">BLOG</a></li>
<li><a href="about.php" class="active">ABOUT US</a></li>
<li><a href="index.php">HOME</a></li>
</ul>
</div>
<!--Header End-->
<!--Container Start-->
<div class="container"><br/>

<div class="inner-container"><br/>
<h1>OUR TEAM</h1>
 <table>
 <tr>
 <td><img src="images/t1.jpg"/></td>
 <td><img src="images/t2.jpg"/></td>
 <td><img src="images/t1.jpg"/></td>
 </tr>
 <tr>
 <td>DR.KETAN PATEL<br/><font color="#666666">(MBBS,CIH)</font></td>
 <td>DR.PADMAJA SHAH<br/><font color="#666666">(MBBS,FCGP)</font></td>
 <td>DR.DEV VERMA<br/><font color="#666666">(MD-Pathology,CIH)</font></td>
 </tr>
 <tr>
 <td><img src="images/t1.jpg"/></td>
 <td><img src="images/t2.jpg"/></td>
 <td><img src="images/t1.jpg"/></td>
 </tr>
 <tr>
 <td>DR.MAHESH MISTRY<br/><font color="#666666">(MBBS,CIH)</font></td>
 <td>DR.MINAL PATEL<br/><font color="#666666">(BHMS)</font></td>
 <td>DR.MEHUL RAHEVAR<br/><font color="#666666">(MBBS,MD)</font></td>
 </tr>
 </table><br>
 <h1>OUR SERVICES</h1><br>
 <div class="brdr">
<div class="service">
<h2>Computerized Pathological Laboratory with Advanced Technology</h2>
<p class="pr">
Clinical pathology is a medical specialty that is concerned with the diagnosis of disease based on the laboratory analysis of bodily fluids, such as blood, urine, and tissues using the tools of chemistry, microbiology, hematology and molecular pathology.
</p>
</div>
<hr>
<div class="service">
<h2>Audiometry (Digital)</h2>
<p class="pr">
Clinical pathology is a medical specialty that is concerned with the diagnosis of disease based on the laboratory analysis of bodily fluids, such as blood, urine, and tissues using the tools of chemistry, microbiology, hematology and molecular pathology.
</p>
</div>
<hr>
<div class="service">
<h2>Spirometry (Computerized)</h2>
<p class="pr">
How are you?
</p>
</div>
<hr>
<div class="service">
<h2>ECG (Computerized</h2>
<p class="pr">
How are you?
</p>
</div>
<hr>
<div class="service">
<h2>TMT (Treadmill Test or Stress Test)</h2>
<p class="pr">
How are you?
</p>
</div>
<hr>
<div class="service">
<h2>Sonography</h2>
<p class="pr">
How are you?
</p>
</div>
<hr>
<div class="service">
<h2>X-Ray Machine</h2>
<p class="pr">
How are you?
</p>
</div>
<hr>
<div class="service">
<h2>Nebulizer</h2>
<p class="pr">
How are you?
</p>
</div>
</div>
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
