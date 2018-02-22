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
$sql="select * from doctor where druname='$name'";
$q=mysql_query($sql);
while($row=mysql_fetch_assoc($q))
{
?>
<html>
<head>
<link rel="stylesheet" href="css/style.css" />
<style>
.txtar
{
font-family:"Microsoft JhengHei";
}
.table1 td
{
border: 1px solid #666666;
border-collapse:collapse;
color:#666666;
}

.table1 th
{
	border: 1px solid #666666;
border-collapse:collapse;
background:#FFF;
color:#FF6600;
}
.table1
{
	border: 1px solid #666666;
border-collapse:collapse;
background:#E6E6E6;
color:#666666;
margin:auto;
width:90%;
font-family:"Microsoft JhengHei";

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

<title>E-Health Solutions Pvt Ltd</title>
</head>
<body>
<div class="header">
<div class="logo">
<img src="images/logo.jpg" height="100">
</div>
<ul>
<li><a href="doctorlogout.php">LOGOUT</a></li>
<li><a href="photo.php">ARTICLE</a></li>
<li><a class="active" href="doctorhome.php">PROFILE</a></li>
</ul>
</div>
<div class="container"><br>
<div class="inner-container">
<div class="compose"><br>
<h1>EDIT PROFILE</h1>
<form action="editdr.php" method="post" enctype="multipart/form-data" name="addroom">
<table>
<tr>
<td><label>Name :</label></td>
<td><input type="text" name="txtdrname" value="<?php echo $row['drname']; ?>" disabled class="txtar" /></td>
</tr>
<tr>
<td><label>Degree :</label></td>
<td><input type="text" name="txtdrdeg" value="<?php echo $row['drdeg']; ?>" disabled class="txtar" /></td>
</tr>
<tr>
<td><label>Email :</label></td>
<td><input type="text" name="txtdremail" value="<?php echo $row['dremail']; ?>" class="txtar" required autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter a valid email address" title="Enter a valid email address"/></td>
</tr>
<tr>
<td><label>Phone :</label></td>
<td><input type="text" name="txtdrphone" value="<?php echo $row['drphone']; ?>" class="txtar" required pattern="^(7|8|9)\d{09}" autocomplete="off" placeholder="Enter a valid 10 digit Mobile Number" maxlength="10"  /></td>
</tr>
<tr>
<td><label>About :</label></td>
<td><textarea name="txtdrprf" class="txtar" required placeholder="Enter details here" style="font-family:'Microsoft JhengHei'; font-size:14px;"><?php echo $row['drprf']; ?></textarea></td>
</tr>
<tr><center><th colspan="2"><input class="btn1" type="submit" name="submit" value="UPDATE" /> </th></center></tr>
</table><br>
</form>
</div>
<?php
}
?>
</table>
</div><br>
</div>
<div class="footer">
<br/>
<p>Designed and Developed By:<a href="http://www.facebook.com/psybob20">Narasimha Babu.V</a> & <a href="https://www.facebook.com/">Sachin Patil</a></p>
</div>
</body>
</html>