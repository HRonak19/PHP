<?php
$con=mysqli_connect('localhost','root','','student');
if(isset($_POST['f']))
{
	$s='SELECT * FROM stud_info' ;
	$s1=mysqli_query($con,$s);
	$r=mysqli_fetch_assoc($s1);
	$number=$r['rollno'];
	$num=$r['name'];
	
}
if(isset($_POST['l']))
{
	$d='select * from stud_info order by rollno desc';
	$a=mysqli_query($con,$d);
	$r=mysqli_fetch_assoc($a);
	$number=$r['rollno'];
	$num=$r['name'];
}
?>
<html>
<body>
	<form method="POST">
		<input type="text" name="name" value="<?php echo $number=$r['rollno'];?>">
		<input type="text" name="name" value="<?php echo $num=$r['name'];?>">			
		<input type="submit" value="first" name="f">
		<input type="submit" value="last" name="l">
				
	</form>
</body>
</html>