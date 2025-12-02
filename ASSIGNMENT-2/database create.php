<?php

	$conn=mysqli_connect("localhost","root","");
	
	if(!$conn)
		echo "not connet<br>";

	else
		echo "connet<br>";

	
$k='create database mydb';
$p=mysqli_query($conn,$k);
	if(!$p)
	{
		echo"<br>not create database";
	
	}
	else
	{
		echo"<br>create database";

	}

$v="create table emp('emp_id int(10)','name varchar(20)','salary int(10)')";

mysqli_select_db($conn,'mydb');
$a=mysqli_query($conn,$v);
	if(!$a)
		echo"<br>not create<br>";

	else
		echo "<br>create<br>";

	
?>