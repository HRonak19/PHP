<?php
if(isset($_POST["done"]))
{
	
	$p=$_POST["d1"];
	$r=$_POST["d2"];
	echo'value1='.$p."<br>";
	echo'value2='.$r;
	$conn=mysqli_connect('localhost','root','','student1');
	
	if(!$conn)
	{
		echo"no"."<br>";
	}
	else
	{
		echo"yes"."<br>";
	}

		$q  =("insert into student1_info values($p,'$r')");
	mysqli_query($conn,$q);
	
	if(!$q)
	{
		echo"no"."<br>";
	}
	else
	{
		echo "yes"."<br>";
	}
	
}

?>

<html>
<body>
	<form method="POST">

		ENTER VALUE=<input type="text" name="d1"><br><br>
		ENTER VALUE=<input type="text" name="d2"><br><br>
	<input type="submit" name="done">

	</form>
</body>
</html>