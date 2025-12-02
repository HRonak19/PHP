<html>
	<body>
		<form method="POST">
			Enter Value <input type="text" name="data">
			Enter Value <input type="text" name="data1">
			Enter Value <input type="text" name="data2">
			
			<input type="submit" name="done">
		<form>
	</body>
</html>

<?php

if(isset($_POST['done']))
{
	$n1=$_POST['data'];
	$n2=$_POST['data1'];
	$n3=$_POST['data2'];
	
		$con1 = ($n1>$n2 && $n1>$n3) ?  $n1."  IS BIG ":   $n1."  NOT IS BIG <br>";
		$con2 = ($n2>$n3 && $n2>$n1) ?  $n2."  IS BIG ":   $n2."  NOT IS BIG <br>";
		$con3 = ($n3>$n1 && $n3>$n2) ?  $n3."  IS BIG ":   $n3."  NOT IS BIG <br>";
	
	echo $con1."<br>".$con2."<br>".$con3;
}

?>