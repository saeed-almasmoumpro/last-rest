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
		//echo "<a href='add.php>add new dta</a><br>";
		echo "<a href='add.php'>Add New Data</a><br><br>";
		$query="select * from infos";
		$result=mysql_query($query);
		$num_result=mysql_num_rows($result);
		if ($num_result>0) {
			for ($i=0; $i<$num_result; $i++) { 

			$info1=mysql_fetch_array($result);
			echo $info1['infoid'];
			echo "  ";
			echo $info1['fname'];
			echo "  ";
			echo $info1 ['work'];
			echo " | ";
			echo "<a href='update.php?infoid=$info1[infoid]'>update</a>";
			echo " | ";
			echo "<a href='delete.php?infoid=$info1[infoid]'>delete</a>";
			echo " | ";
			echo "<a href='details.php?infoid=$info1[infoid]'>details</a>";
			echo"<br>";


			}
			
		}
		else 
		{
			echo "no data to show";
		}
	}
}
mysql_close($conn);
?>