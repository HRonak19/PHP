<html>
<body>
	<form> 
	  <input type="number" name="n" value="<?php echo $r['rollno'];?>"> <br>
	  <input type="number" name="m">
	  <input type="submit" name="f" value="first">
	</form>
</body>
</html>

<?php
$con=mysqli_connect("localhost","root","","student");
if(isset($_POST['f']))
{
	$s="select * from stud_info";
	$s1=mysqli_fetch_array($s);
	
	$r=mysqli_fetch_array($s1);
	$v=$r=['rollno'];
	$c=$r=['name'];
	
	
}
	 


?>