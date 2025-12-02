<html>
<head>
<body>
<form method="POST">
NUMBER 1:<input type="number" name="t1"><br>
NUMBER 2:<input type="number" name="t2"><br>
SELECT  : <select name="ch">
	        <option value="1">
	           ADDITION
		    </option><br>
		    <option value="2">
		     SUBTRACTION
		    </option><br>
		    <option value="3">
		       MULTIPLICATION
		    </option><br>
		    <option value="4">
		       DIVISION
		    </option><br>
		</select>
		<input type="submit" name="submit">	
</form>		
<?php
           if(isset($_POST['submit']))
		{
			$num1=$_POST['t1'];
			$num2=$_POST['t2'];
			$ch=$_POST['ch'];
			$sum;$sub;$mul;$div;
			switch($ch)
			{
				 case 1:
				 $sum=$num1+$num2;
				 echo "ADDITION OF NUMBER:-".$sum;
				 break;
				 
				 case 2:
				 $sub=$num1-$num2;
				 echo "SUBTRACTION OF NUMBER:-".$sub;
				 break;
				 
				 case 3:
				 $mul=$num1*$num2;
				 echo "MULTIPLICATION OF NUMBER:-".$mul;
				 break;
				 
				 case 4:
				 $div=$num1/$num2;
				 echo "DIVISION OF NUMBER:-".$div;
				 break;
				 
			}
		}
?>
</body>
</head>
</html>