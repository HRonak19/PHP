<html>
<head>
<body>
<form method="POST">
  number1: <input type="number" name="num1"><br>
  number2: <input type="number" name="num2"><br>
   <input type="submit" name="submit" value="swap">
 </form>  
<?php
      if(isset($_POST['submit']))
	{
		  $num1=$_POST['num1'];
		  $num2=$_POST['num2'];
	  if($num1>$num2)
	   echo "NUMBER1 IS BIG";
	  else
	   echo "NUMBER2 IS BIG";
	}
?>
</body>
</head>
</html>