<html>
<body>
	<form method="POST">
		Enter Number<input type="text" name="d1">
		<input type="submit">
<?php
	
	if($_SERVER["REQUEST_MATHODE"]=="POST")
	{
		$n=$_REQUEST['d1'];
		
		if($n%2==0)
		{
			echo "NO IS EVEN :- ";
			
		}
		else
		{
			echo "NO IS ODD :- ";
			
		}
		
	}

?>
</form>

<body>
</html>