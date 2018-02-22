<?php
session_start();
include_once('config.php'); 
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
<style>
.caption
{
	text-align:left;
	color:#666666;
	font-family:"Microsoft JhengHei";
}
.lbl
{
color:#ff6600;
font-family:"Microsoft JhengHei";
}

.dt
{
color:#666666;
width:165;
	text-align:right;
	}
</style>
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
<li><a href="blog.php" class="active">BLOG</a></li>
<li><a href="about.php" >ABOUT US</a></li>
<li><a href="index.php">HOME</a></li>
</ul>
</div>
<!--Header End-->
<!--Container Start-->
<div class="container"><br/>

<div class="inner-container"><br/>
<h1>ARTICALS</h1><hr><br>
<?php
$result = mysql_query("SELECT * FROM photos order by date desc");
while($row = mysql_fetch_array($result))
{
$name=$row[2];
$sql=mysql_query("SELECT * FROM doctor WHERE druname='".$name."'");
if($r=mysql_fetch_row($sql))
{
echo '<div id="imagelist" >';
echo '<table>
<tr><th class="caption"><img src="'.$r['1'].'" height="30" width="40"><label class="lbl">'.$r['2'].'</label> Added a new post</th><th class="dt">'.$row[1].'</th></tr>
<tr><th colspan="2">';
if($row[3] != 'images/blog')
{
echo '<p><img src="'.$row[3].'" height="500" width="100%"></p></th></tr>';
}
echo '<tr><th class="caption"><b><p id="caption"><label class="lbl">CAPTION : </label>'.$row[4].'</p></b></th></tr>';
echo '<tr><th class="caption"><p id="description"><label class="lbl">DESCRIPTION : </label>'.$row[5].'</p></th></tr>';
echo '</table><br><hr><br></div>';
}
}
?>
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
