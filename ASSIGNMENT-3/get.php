<html>
  <body>
	<form method="post">
		
	name<input type="text" name="n">
		<input type="submit" name="p">

	</form>
  </body>
</html>

<?php
echo "<pre>";
print_r($_POST);
$con=mysqli_connect("localhost","root","","student");
if(isset($_POST['p']))
{
	$name=$_POST['n'];
	$p="inert into stud value('','$name')";	
	$i=mysqli_query($con,$p);
	
	if(!$p)
	{
		echo "no";
	}
	
}

?>