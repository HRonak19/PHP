<html>
	<body>
		<form method="POST">
		Enter Price/Amount <input type="text" name="p">
		Enter Year <input type="text" name="y">
		Enter rate <input type="text" name="r">
			<input type="submit" name="done">
		
		</form>
	</body>
</html>

<?php
if(isset($_POST['done']))
{
	$r1=$_POST['r'];
	$y1=$_POST['y'];
	$p1=$_POST['p'];
	$total=$p1*$y1*$r1/100;
	
	echo "simpl intrest =".$total
	
	
}


?>