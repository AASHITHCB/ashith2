<?php
session_start();
if(!isset($_SESSION['admin']))
{
header('location:admin.php');
}
if(isset($_POST['submit']))
{
	$email=$_POST['txtto'];
	$msg=$_POST['txtmsg'];
	
//header("location:mailer.php?email=".$email."&msg=".$msg."");
}
?>
<html>
<head>
<link rel="stylesheet" href="css/style.css"/>
<title>E-Health Solutions Pvt Ltd</title>
</head>
<body>
<div class="header">
<div class="logo">
<img src="images/logo.jpg" height="100">
</div>
<ul>
<li><a href="adminlogout.php">LOGOUT</a></li>
<li><a href="doctor.php">DOCTOR</a></li>
<li><a class="active" href="compose.php">COMPOSE</a></li>
<li><a href="adminhome.php">MESSAGES</a></li>
</ul>
</div>
<div class="container"><br>
<div class="inner-container1"><br><br><br>
<h1>COMPOSE MESSAGE</h1><hr width="100%" ><br>
<form name="frm1" action="" method="post">
<table class="compose">
<tr>
<td >TO :</td>
<td><br><input type="text" name="txtto" value="<?php if(isset($_GET['id']))echo $_GET['id']; else echo ""; ?>" required placeholder="Enter a valid email address" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter a valid email address" /></td>
</tr>
<td>MESSAGE :</td>
<td><br><textarea name="txtmsg" value="" required placeholder="Enter message here" style="font-family:'Microsoft JhengHei'; font-size:14px;"></textarea></td>
</tr>
<tr>
<th colspan="2"><br><input class="btn4" type="submit" name="submit" value="SEND MESSAGE"/></th>
</tr>
</table>
</form>

</div><br>
</div>

<div class="footer">
<br/>
<p>Designed and Developed By:<a href="http://www.facebook.com/">AASHITH C.B</a> & <a href="https://www.facebook.com/">RAVI TEJA</a></p>
</div>
</body>
</html>