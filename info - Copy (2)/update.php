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
		echo $_GET[infoid];
		$query="select*from infos where infoid=$_GET[infoid]";
		$result=mysql_query($query);
		$info=mysql_fetch_array($result);
		echo "<form action='update1.php' method='post'>";
		echo "<input type='hidden'name='infoid' value ='$_GET[infoid]'><br>";
		echo"<label>firstname:</label><input type='text' name='fname' value='$info[fname]'><br>";
		echo "<label>city:</label><input type='text' name='city' value='$info[city]'><br>";
		echo "<label>work:</label><input type='text' name='work'  value='$info[work]'><br>";
		echo "<label>birthdate:</label><input type='date' name='bdate'  value='$info[bdate]'><br>";
		echo "<label>salary:</label><input type='text' name='salary' value='$info[salary]'><br>";
			echo "<input type='submit' name='update' value='update inofrmation'>";
	echo"</form>";








		print_r($_POST);
		

	}
}
?>