<?php

if(isset($_POST['done']))
{
	$name=$_POST['t1'];	
	$id=$_POST['t2'];
	$a=$_POST['t3'];
	$u=$_POST['u_name'];
	$p=$_POST['pass'];
	$db=$_POST['date_b'];
    $mn=$_POST['mobil_no'];
	$ln=$_POST['licensh_no'];
}
?>
<html>
<body>
	<form method="post">
	
	User Name :- <input type="text" name="u_name">
	<?php
	
		if(isset($_POST['done']))
		{
			if(empty($u))
			{
				echo "<font color = 'red'> <br>   Please Enter All Details : </font>";
			}
			else
			{
				echo "";
			}
		}
	
?>
	
	<br>
	<br>
	Password :-  <input type="password" name="pass">
	<?php
	
		if(isset($_POST['done']))
		{
			if(empty($p))
			{
				echo "<font color = 'red'> <br>   Please Enter All Details : </font>";
			}
			else
			{
				echo "";
			}
		}
		
    ?>
	
	<br>
	<br>
	
	Name :-  <input type="text" name="t1">
	<?php
		if(isset($_POST['done']))
		{
			if(empty($name))
			{
				echo "<font color = 'red'> <br>   Please Enter All Details : </font>";
			}
			else
			{
				echo "";
			}
		}
	?>
	
	<br>
	<br>

	Student ID <input type="text" name="t2">
	<?php
		if(isset($_POST['done']))
		{
			if(empty($id))
			{
				echo "<font color = 'red'> <br>   Please Enter All Details : </font>";
			}
			else
			{
				echo "";
			}
		}
	?>
	<br>
	<br>
	
	Address :- <input type="text" name="t3">
	<?php
		if(isset($_POST['done']))
		{
			if(empty($a))
			{
				echo "<font color = 'red'> <br>   Please Enter All Details : </font>";
			}
			else
			{
				echo "";
			}
		}
	?>
	
	<br>
	<br>
	Date OF Barth :- <input type="date" name="date_b">
	<?php
	if(isset($_POST['done']))
	{
		if(empty($db))
		{
			echo "<font color = 'red'> <br>   Please Enter All Details : </font>";
		}
		else
		{
			echo "";
		}
	}
	?>
	
	<br>
	<br>
	Mobile Number :- <input type="mobile number" name="mobil_no">
	<?php
	if(isset($_POST['done']))
	{
		if(empty($mn))
		{
			echo "<font color = 'red'> <br>   Please Enter All Details : </font>";
		}
		else
		{
			echo "";
		}
	}
	?>
	
	<br>
	<br>
	Licensh Number :- <input type="licensh number" name="licensh_no">
	<?php
	if(isset($_POST['done']))
	{
		if(empty($ln))
		{
			echo "<font color = 'red'> <br>   Please Enter All Details : </font>";
		}
		else
		{
			echo "";
		}
	}
	?>
	
		<br>
		<br><input type="submit" name="done">
	
	</form>
</body>
</html>