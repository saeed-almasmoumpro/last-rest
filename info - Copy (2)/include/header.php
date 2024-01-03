<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
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
		  ?>
<body>

</body>
</html>