<html>
	
	<body>
		
		<form method="POST">
		
			A = <input type="text" name="a1"><br>
			
			B = <input type="text" name="aa"><br>
			
			<input type="submit" name="a2">
			
		</form>
	
	</body>
	
</html>

<?php

if(isset($_POST['a2']))
{
	$a=$_POST['a1'];
	
	$b=$_POST['aa'];
	
	$a=$a+$b;
	$b=$a-$b;
	$a=$a-$b;
	
	echo"a=".$a;
	echo"<br>b=".$b;
	

}	
	
?>