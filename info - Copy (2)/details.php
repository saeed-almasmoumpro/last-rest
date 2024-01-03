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
		//echo $_GET[infoid];
		$query="select*from infos where infoid=$_GET[infoid]";
		$result=mysql_query($query);
		$info=mysql_fetch_array($result);
		
		echo "$info[infoid]<br>";
		echo"$info[fname]<br>";
		echo "$info[city]<br>";
		echo "$info[work]<br>";
		echo "$info[bdate]<br>";
		echo "$info[salary]<br>";
		echo"<br><a href='show.php'>back</a><br>";
			
	








	
		

	}
}
?>