<html>
	<body>
		<form method="POST">
			Enter Basic salary :- <input type="text" name="b"> <br>
			
			<input type="submit" name="bone">
 				
		</form>
	</body>
</html>
<?php
	$basic=$_POST['b'];
	echo "basic sal. :- ".$basic."<br>";
		
	$da=($basic*5)/100;
	echo "ba (5%):- ".$ba."<br>";

	$pf=($basic*5)/100;
	echo "pf (5%):- ".$pf."<br>";
	
	$tax=($basic*5)/100;
	echo "tax (5%):- ".$tax."<br>";
	
	$ta=($basic*10)/100;
	echo "ta (10%):- ".$ta."<br>";
	
	$gs=$basic+$da+$ta-$pf-$tax;
	
	echo "Gross salary :- ".$gs;
	
	
?>