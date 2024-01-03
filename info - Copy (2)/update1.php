<?php
$dbserver="localhost";
$dbusername="root";
$dbpass="12345678";
$dbname="test";
$conn=mysql_connect($dbserver,$dbusername,$dbpass);
if (!$conn) 
{
	die('could not connet server:'. mysql_errno());
}
else
{
	echo "connect okey to server<br>";
	$db_conn=mysql_select_db($dbname,$conn);
	if (!$db_conn)
	{
		echo "error in select database";
	}
	else
	{
		echo "connect sucessfuly to data base <br>";
		echo "<h1>update data:</h1><br>";
		print_r($_POST);
		echo "<br>";
		$query="update infos set fname='$_POST[fname]',city='$_POST[city]',work='$_POST[work]',bdate='$_POST[bdate]' where infoid='$_POST[infoid]'";
		echo $query;
		$result=mysql_query($query);
		$affected=mysql_affected_rows();
		if ($affected>0) {
			echo "<h1> update sucssefuly</h1>";
			echo "<br>";
			echo "<a href='show.php'>baaaack</a>";
			echo "<br>";

			# code... 
		}
		else
			{echo "error on update";}
		


	}
}
?>