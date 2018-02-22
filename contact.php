<?php
session_start(); 
include_once('db.php');
if(isset($_SESSION['doctor']))
{
header('location:drlogin.php');
}
elseif(isset($_SESSION['admin']))
{
header('location:adminhome.php');
}

if(isset($_POST['submit']))
{
date_default_timezone_set('Asia/Kolkata');
$date=date('y/m/d h:i:s a',time());
$sql="insert into contact (date,name,email,phone,msg) values('$date','".$_POST['txtname']."','".$_POST['txtemail']."','".$_POST['txtphn']."','".$_POST['txtmsg']."')";
$q=mysql_query($sql);
if($q==1)
	echo "<script>alert('Message has been sent . . .')</script>";
	else
	echo "<script>alert('Message has not been sent . . .')<script>";
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
<li><a href="contact.php" class="active">CONTACT US</a></li>
<li><a href="gallery.php">GALLERY</a></li>
<li><a href="blog.php">BLOG</a></li>
<li><a href="about.php">ABOUT US</a></li>
<li><a href="index.php">HOME</a></li>
</ul>
</div>
<!--Header End-->
<!--Container Start-->
<div class="container"><br/>
<div class="inner-container"><br/>
<h1>LEAVE US A MESSAGE</h1>
<hr><br/>
<form name="frm1" action="" method="post">
<table class="contact">
<tr>
<td class="ttl">NAME :</td>
<td><input type="text" name="txtname" value="" autofocus required autocomplete="off" title="Firstname Lastname" placeholder="Firstname Lastname"/></td>
</tr>
<tr>
<td class="ttl">EMAIL :</td>
<td><input type="email" name="txtemail" value="" required autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter a valid email address" title="Enter a valid email address" /></td>
</tr>
<tr>
<td class="ttl">PHONE :</td>
<td><input type="tel" name="txtphn" value="" required pattern="^(7|8|9)\d{09}" autocomplete="off" placeholder="Enter a valid 10 digit Mobile Number" maxlength="10" /></td>
</tr>
<tr>
<td>MESSAGE :</td>
<td><textarea name="txtmsg" value="" required placeholder="Enter your message here" style="font-family:'Microsoft JhengHei'; font-size:14px;" ></textarea></td>
</tr>
<tr>
<th colspan="2"><input class="btn" type="submit" name="submit" value="SEND MESSAGE"/></th>
</tr>
</table>
</form>
<br/>
<h1>CONTACT INFORMATION</h1>
<hr>
<br/>
<ul>
<li><label style="color:#FF6600;">Monday - Saturday :</label><small> 9:00 AM to 9:00 PM</small></li>
<li><label style="color:#FF6600;">Address :</label><small> Shop No.1, New Colony Shopping Center, <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Near Dr.Rajkumar Rd, RajajiNagar 2nd block, <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bengaluru, Karnataka 560010, INDIA.</small></li>
<li>
<label style="color:#FF6600;">Phone :</label>
<small>(+91)-7760197567</small>
</li>
<li>
<label style="color:#FF6600;">Email :</label>
<small><b><a href="mailto:ihspl11@gmail.com">ihspl11@gmail.com</a></b><br/></small>
</li>
</ul>

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
