

<?php
if(isset($_POST["t1"]))
{
	$rno=$_POST["n1"];
	$name=$_POST["n2"];
	
	$con=mysqli_connect("localhost","root","","test");
	
	$gohil="insert into manoj value(rno,'name')";
	
	$kaka=mysqli_query($con,$gohil);
	
	if($kaka)
	{
		echo "Yes";
	}
	else
	{
		echo "No";
	}
}
?>
<html>
<body>
	<form method="post">
	RNO:<input type="text" name="n1"><br><br>
	NAME:<input type="text" name="n2"><br><br>
	<input type="submit" name="t1">
	</form>
	
</body>
</html>
