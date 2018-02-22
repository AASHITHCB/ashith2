<?php
session_start();
if(!isset($_SESSION['admin']))
{
header('location:admin.php');
}
else
{
include_once('config.php');
$sql="select * from contact ORDER BY date DESC";
$q=mysql_query($sql);
}
?>
<html>
<head>
<style>
table,th,td
{
border: 1px solid #666666;
border-collapse:collapse;
}
th
{
background:#FFF;
color:#FF6600;
}
table
{
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
<li><a href="compose.php">COMPOSE</a></li>
<li><a class="active" href="adminhome.php">MESSAGES</a></li>
</ul>
</div>
<div class="container"><br>
<div class="inner-container1"><br><br>
<form action="" method="get">
<table>
<tr>
<th>Date & Time</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Message</th>
<th>Edit</th>

</tr>

<?php
while($row=mysql_fetch_assoc($q))
{
echo "<tr>";
echo "<td width='20%'>".$row['date']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['phone']."</td>";
echo "<td>".$row['msg']."</td>";
?>
<td width="25%"><center><a class="btn3" href="delete.php?id=<?php echo $row['cid']; ?>">DELETE</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn3" href="compose.php?id=<?php echo $row['email']; ?>">SEND MESSAGE</a></center></td>
<?php echo "</tr>";
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