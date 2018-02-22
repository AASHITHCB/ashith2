<?php
session_start();
if(!isset($_SESSION['admin']))
{
header('location:admin.php');
}
include_once('db.php');
$sql="select * from doctor ORDER BY doctor_id";
$q=mysql_query($sql);
?>
<html>
<head>
<link rel="stylesheet" href="css/style.css" />

<style>
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
<li><a href="adminlogout.php">LOGOUT</a></li>
<li><a class="active" href="doctor.php">DOCTOR</a></li>
<li><a href="compose.php">COMPOSE</a></li>
<li><a  href="adminhome.php">MESSAGES</a></li>
</ul>
</div>
<div class="container"><br>
<div class="inner-container">
<div class="compose"><br>
<h1>ADD DOCTOR</h1>
<form action="adddr.php" method="post" name="frm" enctype="multipart/form-data">
<table>
<tr>
<td><label>Select Photo :</label></td>
<td><input type="file" name="image" required /><br /></td>
</tr>
<tr>
<td><label>Name :</label></td>
<td><input type="text" id="name" name="txtdrname" required autocomplete="off" title="Dr. Firstname Lastname" placeholder="Dr. Firstname Lastname" /></td>
</tr>
<tr>
<td><label>Degree :</label></td>
<td><input type="text" name="txtdrdeg" required autocomplete="off" placeholder="Enter Degree" /></td>
</tr>
<tr>
<td><label>Username :</label></td>
<td><input type="text" name="txtdruname" required pattern="\w+" autocomplete="off" placeholder="Username" /></td>
</tr>
<tr>
<td><label>Password :</label></td>
<td><input type="password" id="password" name="txtdrpass" required title="Password must contain at least 6 characters, including UPPER/lowercase and numbers" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" placeholder="Password"/></td>
</tr>
<tr>
<td><label>Email :</label></td>
<td><input type="text" id="email" name="txtdremail" required autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter a valid email address" title="Enter a valid email address"/></td>
</tr>
<tr>
<td><label>Phone :</label></td>
<td><input type="text" id="phone" name="txtdrphone" required pattern="^(7|8|9)\d{09}" autocomplete="off" placeholder="Enter a valid 10 digit Mobile Number" maxlength="10" /></td>
</tr>
<tr>
<td><label>About :</label></td>
<td><textarea name="txtdrprf" required placeholder="Enter details here" style="font-family:'Microsoft JhengHei'; font-size:14px;"></textarea></td>
</tr>
<tr><center><th colspan="2"><input class="btn1" type="submit" name="submit" value="ADD" /> <input class="btn1" type="reset" value="RESET" /></th></center></tr>
</table><br>
</form>
</div>
<h1>DOCTOR DETAILS</h1>
<table class="table1">
<tr>
<th>Name</th>
<th>Degree</th>
<th>Username</th>
<th>Password</th>
<th>Email</th>
<th>Phone</th>
<th>Edit</th>
</tr>
<?php
while($row=mysql_fetch_assoc($q))
{
echo "<tr>";
echo "<td>".$row['doctor_name']."</td>";
echo "<td>".$row['drdeg']."</td>";
echo "<td>".$row['druname']."</td>";
echo "<td>".$row['drpass']."</td>";
echo "<td>".$row['dremail']."</td>";
echo "<td>".$row['drphone']."</td>";
?>
<td width="25%"><center><a class="btn3" href="drdelete.php?id=<?php echo $row['doctor_id']; ?>">DELETE</a></center></td>
<?php echo "</tr>";
}
?>
</table>
</div><br>
</div>
<div class="footer">
<br/>
<p>Designed and Developed By:<a href="http://www.facebook.com/">AASHITH C.B</a> & <a href="https://www.facebook.com/">RAVI TEJA</a></p>
</div>
</body>
</html>