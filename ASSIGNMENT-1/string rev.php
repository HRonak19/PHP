<html>
<head>
<body>
<form method="POST">
  number1: <input type="number" name="num1"><br>
   ENTER STRING <input type="tax" name="b"><br>
   <input type="submit" name="submit" value="swap">
 </form>  
<?php
      $r=0;
	  $rev=0;
	  $p;
     if(isset($_POST['submit']))
	{
		$num1=$_POST['num1'];
		$b=$_POST['b'];
	  while($num1>1)
	  {
		$r=$num1%10;
		$rev=($rev*10)+$r;
		$num1=$num1/10;
	  }
	  echo "REVERSE NUMBER=".$rev;
	  $p=strrev($b);
	  echo "<br>STRING REV=".$p;
	}
?>
</body>
</head>
</html>