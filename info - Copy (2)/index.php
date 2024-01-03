<!DOCTYPE html>
<html>
<head>
	<title>show data infos </title>
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
</head>
<body>
	
	<?php
	//for delete..........................................
	echo$_GET[ban];
	echo$_GET[infoid];
	if ($_GET[ban]==1) {
		
	
$query="delete from infos where infoid='$_GET[infoid]'";
		$result=mysql_query($query);
		$affected=mysql_affected_rows();
		$_GET[ban]=2;}


	                     // for update
	                     echo$_GET[ban1];
	                      echo$_GET[infoid];
	                     if($_GET[ban1]==1) {
	                      	$query="select*from infos where infoid=$_GET[infoid]";
		                    $result=mysql_query($query);
		                 $info=mysql_fetch_array($result);
		                 echo "<form action='index.php' method='post'>";
		                 echo "<input type='hidden'name='infoid' value ='$_GET[infoid]'><br>";
		                 echo"<label>firstname:</label><input type='text' name='fname' value='$info[fname]'><br>";
		                      echo "<label>city:</label><input type='text' name='city' value='$info[city]'><br>";
		                      echo "<label>work:</label><input type='text' name='work'  value='$info[work]'><br>";
		                      echo "<label>birthdate:</label><input type='date' name='bdate'  value='$info[bdate]'><br>";
		                      echo "<label>salary:</label><input type='text' name='salary' value='$info[salary]'><br>";
		                   	echo "<input type='submit' name='update' value='update inofrmation'>";
	                         echo"</form>";}
	                         $query="update infos set fname='$_POST[fname]',city='$_POST[city]',work='$_POST[work]',bdate='$_POST[bdate]',salary='$_POST[salary]' where infoid='$_POST[infoid]'";
		                       
		                       $result=mysql_query($query);
		                        $affected=mysql_affected_rows();
	                         	if ($affected>0) {
		                    	echo "<h1 style='background-color:#D2B48C'> update sucssefuly </h1>";
		                    	echo$_GET[ban1]=2;
		                    	echo "<br>";
		                    echo "<a href='index.php'>baaaack</a>";
			                }
			                                             
	                     //for adding data........
			                if(isset($_POST['add_new'])) {
			                	# code...
			                
			                     	echo"<form action='index.php' method='post'>";
		                            echo" <label>firstname:</label><input type='text' name='fname'><br>";
		                             echo"<label>city:</label><input type='text' name='city'></input><br>";
		                             echo"<label>work:</label><input type='text' name='work'></input><br>";
		                             echo"<label>birthdate:</label><input type='date' name='bdate'><br>";
		                              echo" <label>salary:</label><input type='text' name='salary'><br>";
		                             	echo"<input type='submit' name='ok' value ='ok'";}
		                             	if(isset($_POST['ok'])){
		                             		$query="insert into infos values( null,'$_POST[fname]','$_POST[city]','$_POST[work]','$_POST[bdate]','$_POST[salary]')";
		                                        
		                                         $result=mysql_query($query);
	                                           	$affected=mysql_affected_rows();
		                                        if ($affected>0) {
		                                 	echo "<h1> add sucssefuly</h1><br>";
		                                 	echo "<a href='index.php'>baaaack</a>";
		                                    echo "<br>";}}
			                                

			                  

		                       
			                  	# code...
			                  
			                

			               


		
		?>



        <?php
	echo$_GET[ban];


		echo "<br>";
		echo "<h1> SHOW DATA </h1><br>";
		echo"<form action='index.php' method='post'>";
		echo "<input type='submit' name='add_new' value='add data'>";
		echo"</form>";
		echo "<br>";
		echo "<br>";

		$query="select * from infos";
		$result=mysql_query($query);
		$num_result=mysql_num_rows($result);
		if ($num_result>0)
		 {
		 	echo "<table>";
		 	echo "<tr style='background-color:#E9967A'>";
		 	echo "<th> ID </th>";
		 	echo "<th> FIRST NAME</th>";
		 	echo "<th>WORK</th>";
		 	echo "<th> CITY</th>";
		 	echo "<th>  B  DATE </th>";
		 	echo "<th>  SALARY </th>";
		 	echo "<th>  update </th>";
		 	echo "<th>  delete </th>";
		 	echo "<th>  details </th>";



		 	echo "</tr>";
			for ($i=0; $i<$num_result; $i++) { 

			$info1=mysql_fetch_array($result);
			echo "<tr style='background-color:#FFDAB9'>";
			
			echo "<td>$info1[infoid] </td>";
			
			echo"<td> $info1[fname]</td>";
			
			echo "<td>$info1[work]</td>";
			echo "<td>$info1[city]</td>";
			echo "<td>$info1[bdate]</td>";
			echo "<td>$info1[salary]</td>";

			
			echo "<td><a href='index.php?ban1=1&infoid=$info1[infoid]'>update</a></td>";
			
			echo "<td><a href='index.php?ban=1&infoid=$info1[infoid]'>delete</a></td>";
			
			echo "<td><a href='details.php?infoid=$info1[infoid]'>details</a><td>";
			echo"<br>";
			echo "</tr>";


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
</body>
</html>