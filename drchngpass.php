<?php
session_start();
include_once('config.php');
error_reporting (E_ALL ^ E_NOTICE);
if(!isset($_SESSION['doctor']))
{
header('location:drlogin.php');
}
elseif(isset($_SESSION['admin']))
{
header('location:adminhome.php');
}
if(isset($_POST['submit']))
{
$t=$_SESSION['doctor'];
$sql="select drpass from doctor where druname='$t'";
$q=mysql_query($sql);
if($row=mysql_num_rows($q))
{
	if($_POST['txtpaas1']!=$row[0])
	
	echo "<script>alert('You have entered Current Password wrong . . . !');</script>";
}
if($_POST['txtpaas1']==$row[0])
{
echo "<script>alert('New password is same as current password . . . ! ');</script>";
}
if($_POST['txtpaas2']!=$_POST['txtpaas3'])
{
echo "<script>alert('Please re-enter confirm password as new password ');</script>";
header('location: doctorhome.php');
}
if($_POST['txtpaas2']==$_POST['txtpaas3'])
{
$sql1="UPDATE doctor set drpass='".$_POST['txtpaas2']."'";
mysql_query($sql1);
echo "<script>alert('Password has been updated successfully');</script>";
header('location: doctorhome.php');
}
}

?>
<html>
<head>
<link rel="stylesheet" href="css/style.css"/>
<title>E-Health Solutions Pvt Ltd</title>
</head>
<body bgcolor="#666666">
<div class="header">
<div class="logo">
<img src="images/logo.jpg" height="100">
</div>
<ul>
<li><a href="doctorlogout.php">LOGOUT</a></li>
<li><a href="photo.php">ARTICLE</a></li>
<li><a href="doctorhome.php">PROFILE</a></li>
</ul>
</div><br>
<form action="" method="post"> 
<table class="chngpass">
<tr class="heading">
<th colspan="2" >CHANGE PASSWORD</th>
</tr>
<tr>
<td>CURRENT PASSWORD :</td>
<td> <input type="password" name="txtpass1" class="txtbox" required placeholder="Enter Current Password"/></td>
</tr>
<tr>
<td>NEW PASSWORD :</td>
<td> <input type="password" name="txtpass2" class="txtbox" required placeholder="Enter New Password" required title="Password must contain at least 6 characters, including UPPER/lowercase and numbers" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" /></td>
</tr>
<tr>
<td>CONFIRM PASSWORD :</td>
<td> <input type="password" name="txtpass3" class="txtbox" required placeholder="Re-enter New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Enter password same as above"/></td>
</tr>
<tr>
<th colspan="2"><input class="btn1" type="submit" name="submit" value="LOGIN" /></th>
</tr>
</table>
</form>
<br>
<div class="footer">
<br/>
<p>Designed and Developed By:<a href="http://www.facebook.com/psybob20">Narasimha Babu.V</a> & <a href="https://www.facebook.com/">sachin Patil</a></p>
</div>
</body>
</html>