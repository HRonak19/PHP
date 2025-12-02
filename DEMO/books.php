<html>
	<body>
		<form method="POST">
			Enter Book Name :- <input type="text" name="b"> <br>
			Enter Book Quantity :- <input type="text" name="q"> <br>
			Enter Book Price :- <input type="text" name="p"> <br>
			
			<input type="submit" name="bone">
 				
		</form>
	</body>
</html>
<?php
	$name=$_POST['b'];
	$price=$_POST['p'];
	$quan=$_POST['q'];
	
	$total=$price*$quan;
	
		echo "Book Name :- ".$name."<br>";
		echo "Total Sale :- ".$total;
?>