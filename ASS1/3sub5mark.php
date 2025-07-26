<html>
	<body>
		<form method="POST">

			Sub1 = <input type="number" name="S1">
			Sub2 = <input type="number" name="S2">
			Sub3 = <input type="number" name="S3">
			Sub4 = <input type="number" name="S4">
			Sub5 = <input type="number" name="S5">

				<input type="submit" name="submit">
		</form>
	</body>
</html>
<?php

	if(isset($_POST['submit'])) {

		$Sub1 = $_POST['S1'];
		$Sub2 = $_POST['S2'];
		$Sub3 = $_POST['S3'];
		$Sub4 = $_POST['S4'];
		$Sub5 = $_POST['S5'];

		$total = $Sub1+$Sub2+$Sub3+$Sub4+$Sub5;
		$per = $total / 5;

			echo $per;

		if($per>=30 && $per<=40) {

			echo "<br>D grade";
		}
		else if($per>40 && $per<=55) {
			echo "<br>C Grade";
		}
		else if($per>55 && $per<=75) {
			echo "<br>B Grade";
		}
		else {
			echo "<br>A Grade";
		}
	}
?>