<html>
	<body>
		<form method="POST">
			ADD Any Number : <input type="number" name="No">
					<input type="submit" name="submit">
		</form>
	</body>
</html>
<?php

	if(isset($_POST['submit'])) {

		if(isPerfectSquare($_POST['No']) {
			echo "is Perfect";
		}
		else {
			echo "is non Perfect";
		}
	}
?>