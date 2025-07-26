<html>
	<body>
		<form method="POST">

				num1 <input type="number" name="N1">
				num2 <input type="number" name="N2">

					<input type="submit" name="submit">
		</form>
	</body>
</html>

<?php
	
	if(isset($_POST['submit'])) {

		$no1 = $_POST['N1'];
		$no2 = $_POST['N2'];


		echo "<br>sum = ".$no1+$no2;
		echo "<br>sub = ".$no1-$no2;
		echo "<br>multi = ".$no1*$no2;
		echo "<br>div = ".$no1/$no2;
	}
?>