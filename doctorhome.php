<?php
session_start();
include_once('config.php');
if(!isset($_SESSION['doctor']))
{
header('location:drlogin.php');
}
elseif(isset($_SESSION['admin']))
{
header('location:adminhome.php');
}

$name=$_SESSION['doctor'];

$sql="select * from doctor where doctor_name='$name'";
$q=mysql_query($sql);
?>
<html>
<head>
<style>
td
{
text-align-last:left;
}
th
{
color:#FF6600;
}
.tbl
{

color:#666666;
margin:auto;
width:90%;
font-family:"Microsoft JhengHei";

}
.abt
{
font-family:"Microsoft JhengHei";
font-size:15px;
color:#666666;	
}
.tbl1
{
color:#666666;
margin:auto;
font-family:"Microsoft JhengHei";
}
.lbl
{
color:#ff6600;
}
.btn2
{
	font-family:"Microsoft JhengHei";
font-size:17px;
color:#666666;
border:none;
background-color:transparent;
}
.btn2:hover
{
color:#ff6600;
border:none;
background-color:transparent;
}

.btn3
{
text-decoration:none;
color:#666666;
}
.btn3:hover
{
color:#ff6600;
}
</style>

<link rel="stylesheet" href="css/style.css"/>
<title>E-Health Solutions Pvt Ltd</title>
</head>
<body>
<div class="header">
<div class="logo">
<img src="images/a.jpg" height="100">
</div>
<ul>
<li><a href="doctorlogout.php">LOGOUT</a></li>
<li><a href="photo.php">ARTICLE</a></li>
<li><a class="active" href="doctorhome.php">PROFILE</a></li>
</ul>
</div>
<div class="container"><br>
<div class="inner-container1"><br>

<h1>PROFILE</h1><br>
<?php
while($row=mysql_fetch_assoc($q))
{
echo "<table class='tbl'><tr>";
echo '<th colspan="2"><form action="drphoto.php" method="post" enctype="multipart/form-data"><img src="'.$row['location'].'" height=210 width=200 /><br><br><input type="file" name="image" required /><br><br><input type="submit" name="photo" value="CHANGE PHOTO" class="btn1" /></form></th></tr></table><br>'; ?>
<form action="dredit.php" method="post">
<?php
echo "<table class='tbl1'>";
echo "<tr><td class='lbl'>Name : </td><td>".$row['drname']."</td></tr>";
echo "<tr><td class='lbl'>Degree : </td><td>".$row['drdeg']."</td></tr>";
echo "<tr><td class='lbl'>Username : </td><td>".$row['druname']."</td></tr>";
echo "<tr><td class='lbl'>Email : </td><td>".$row['dremail']."</td></tr>";
echo "<tr><td class='lbl'>Phone : </td><td>".$row['drphone']."</td></tr>";
echo "<tr><td class='lbl'>About : </td><td><pre class='abt'>".$row['drprf']."</pre></td></tr>";
echo "<tr><th colspan='2'><br><input type='submit' name='edit' value='EDIT PROFILE' class='btn1' /></th></tr>";
}
?>
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