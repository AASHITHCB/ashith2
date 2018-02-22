<?php
include_once('config.php');
?>

<html>
<head>
<link rel="stylesheet" href="css/style.css" />
<script src="js/jquery.min.js"></script>
<style>
.artcl
{
width:40%;
margin:0 auto;
color:#ff6600;
font-family:"Microsoft JhengHei";
}
.txtbx
{
height:30px;	
width:250px;
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
<li><a href="doctorlogout.php">LOGOUT</a></li>
<li><a class="active" href="photo.php">ARTICLE</a></li>
<li><a href="doctorhome.php">PROFILE</a></li>
</ul>
</div>
<!--Header End-->
<!--Container Start-->
<div class="container"><br/>

<div class="inner-container"><br/>
<h1>UPLOAD NEW ARTICLE</h1><br />
<div class="artcl">
 <form action="addexec.php" method="post" enctype="multipart/form-data" name="addroom">
 <label>Select Image: </label><br />
 <input type="file" name="image"><br /><br/>
 <label>Caption : </label><br />
 <input name="caption" type="text" id="brnu" class="txtbx" required placeholder="Enter Caption"/><br/><br/>
 <label>Description : </label><br />
 <textarea rows="10" cols="50" name="txtDescription" required placeholder="Enter Description" style="font-family:'Microsoft JhengHei'; font-size:14px;" ></textarea><br /><br />
<center><input type="submit" name="Submit" value="UPLOAD" id="button1" class="btn1" /></center>
 </form>
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
