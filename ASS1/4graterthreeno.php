<html>
	<body>
		<form method="POST">
			ADD Any Three Numbers <br><input type="number" name="N1">
				<br><input type="number" name="N2">
				<br>	<input type="number" name="N3">
				<br>	<input type="submit" name="submit">
		</form>
	</body>
</html>
<?php
	
	if(isset($_POST['submit'])) {

		if($_POST['N1'] > $_POST['N2'] && $_POST['N1'] > $_POST['N3']) {

			echo "First number is big";
		}
		else if($_POST['N2'] > $_POST['N1'] && $_POST['N2'] > $_POST['N3']) {

			echo "Second Number is Big";
		}
		else {

			echo "Last Number is Big";
		}
	}
?>