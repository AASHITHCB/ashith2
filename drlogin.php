<?php
include_once('db.php');
session_start();
if(isset($_SESSION['admin']))
{
header('location:adminhome.php');
}
if(isset($_SESSION['doctor']))
{
header('location:doctorhome.php');
}
if(isset($_POST['submit']))
{
$t1=$_POST['txtuname'];
$t2=$_POST['txtpass'];
$_SESSION['doctor']=$t1;
$sql="select * from doctor where druname='$t1' AND drpass='$t2'";
$q=mysql_query($sql);
if(mysql_num_rows($q)==1)
header('location:doctorhome.php');
else
echo "<script>alert('Username or Password Invalid . . . !');</script>";
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
<li><a class="active" href="drlogin.php">DOCTOR LOGIN</a></li>
<li><a href="admin.php">ADMIN LOGIN</a></li>
</ul>
</div>
<br>
<form action="" method="post"> 
<table class="login">
<tr class="heading">
<th colspan="2" >DOCTOR LOGIN</th>
</tr>
<tr>
<td>USERNAME :</td>
<td><input type="text" name="txtuname" class="txtbox" required autocomplete="off"/></td>
</tr>
<tr>
<td>PASSWORD :</td>
<td><input type="password" name="txtpass" class="txtbox" required/></td>
</tr>
<tr>
<th colspan="2"><input class="btn1" type="submit" name="submit" value="LOGIN" /></th>
</tr>
</table>
</form>
<br>
<div class="footer">
<br/>
<p>Designed and Developed By:<a href="http://www.facebook.com/">AASHITH C.B</a> & <a href="https://www.facebook.com/">RAVI TEJA</a></p>
</div>
</body>
</html>