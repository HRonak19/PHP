<html>
<head>
<body>
<form method="POST">
ENTER THE METER:-<input type="number" name="t1"><br>
   <input type="submit" name="submit" >
 </form>
<?php
       if(isset($_POST['submit']))
	   {
		
		   $num=$_POST['t1'];
		   if($num>1000)
		   {   
		     $mt=$num/1000;
		     echo "KILOMETER:-".$mt;
		   }
		  else
		   {
			   $k=$num*1000;
			   echo "<br> METER:-".$k;
		   }
		   
		   
		 
	   }
?>
</body>
</head>
</html>