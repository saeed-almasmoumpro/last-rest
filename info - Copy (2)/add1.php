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
		echo "<h1>show data:</h1><br>";
		print_r($_POST);
		$query="insert into infos values(null,'$_POST[fname]','$_POST[city]','$_POST[work]',
		'$_POST[bdate]','$_POST[salary]')";
		echo $query;
		$result=mysql_query($query);
		$affected=mysql_affected_rows();
		if ($affected>0) {
			echo "<h1> add sucssefuly</h1>";
			echo "<br>";
			echo "<a href='show.php'>baaaack</a>";
			echo "<br>";

			# code... 
		}
		else
			{echo "error";}
		


	}
}
?>