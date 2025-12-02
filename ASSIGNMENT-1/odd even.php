<html>
<head>
<body>
<form method="POST">
  number1: <input type="number" name="num1"><br>
   <input type="submit" name="submit" value="swap">
 </form>  
<?php
     if($_SERVER['REQUEST_METHOD']=="POST")
	{
		  $num1=$_REQUEST['num1'];
	    if($num1%2==0)
	   echo "even number";
	 else
	   echo "odd number";
	}
?>
</body>
</head>
</html>