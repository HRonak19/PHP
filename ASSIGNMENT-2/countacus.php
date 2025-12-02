<?php
if(isset($_POST['done']))
{
	$name=$_POST['n'];
	$name=$_POST['Email'];
	$name=$_POST['number'];
	$name=$_POST['abc'];

	header("location : welcome.php");

}
?>

<html>
<body>
<form method="post" action="welcome.php">

	<table border="1" cellspacing="0">
		<tr>
			<td> image
			<td> ADARSH EDUCATIONAL CAMPUS <br> Managed by Takshila Edu. & Char.Trust
		</tr>
		
		<tr>
			<td>HOME:-
			<td rowspan="3">	
			<table border="1" cellspacing="0">
		</tr>
	
		<tr>
			<td colspan="2">Any Query Contact Us...
		</tr>                                                     
	
		<tr>
			<tr>Name:-
			<td><input type="text" name="n">
		</tr>
	
		<tr>
			<td>Email:-
			<td><input type="email" name="email">
		</tr>
	
		<tr>
			<td>Contact No:-
			<td><input type="number" name="number">
		</tr>
	
		<tr>
			<td valign="top">Message:-
			<td><textarea name="abc"></textarea>
		</tr>
	
		<tr>
			<td><input type="submit" name="done" value="send">
		</tr>
	
		</table>
	</td>
	</tr>	

		<tr>
			<td>ABOUT Us
		</tr>
	
		<tr>
			<td rowspan="2" valign="top"> Contact Us
		</tr>
	
		<tr>
			<td colspan="2" align="center"> POWERED BY @ ADARSH |CAMPUS
		</tr>
			
	</table>
	
</form>
</body>	
</html>