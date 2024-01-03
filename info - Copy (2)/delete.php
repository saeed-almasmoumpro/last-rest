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
		echo "error in delete database";
	}
	else
	{
		echo "connect sucessfuly to data base <br>";
		echo "<h1>delete data:</h1><br>";
		echo $_GET[infoid];
		echo "<h1> ARE YOU SURE </h1>";
		echo "<form action='delete1.php' method='post'>";
		echo "<input type='hidden'name='infoid' value ='$_GET[infoid]'><br>";
		echo "<input type = 'submit' name='yes' value='yesss'>";
		echo"</form>";
		echo "<form action='show.php' method='post'>";
		echo "<input type = 'submit' name='no' value='nooo'>";





	echo"</form>";








		print_r($_POST);
		

	}
}
?>