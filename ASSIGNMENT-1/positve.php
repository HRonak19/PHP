<html>
<body>
<form method="POST">
NUMBER:-<input type="number" name="t1"><br>
    <input type="submit" name="submit">
</form>
<?php
    if(isset($_POST['submit']))
	{
		$a=$_POST['t1'];
	   if($a>0)
	    echo $a."POSITIVE NUMBER";
        else if($a==0)
		 echo $a."NUMBER IS ZERO";
	     else
		  echo $a."NEGETIVE NUMBER";
	}
?>