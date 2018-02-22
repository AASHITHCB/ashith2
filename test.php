<?php
mysql_connect("localhost","root","");
mysql_select_db("project");
$sql="select * from doctor where druname=drketan";
$q=mysql_query($sql);
if($row=mysql_fetch_array($q))
{
	echo "Hello";
}

?>