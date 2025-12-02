<html>
<body>
<form method="POST">
NUMBER:-<input type="number" name="t1"><br>
   <input type="submit" name="submit">
 </form>
<?php
   
   if(isset($_POST['submit']))
   {
	   
      $no=$_POST['t1'];
	  $k = 1;
       for($i=1; $i<$no; $i++)
	   { 
	     if($i * $i == $no)
		 {
		   $k = 2;
		   break;
	      }
	   }
   
   
        if($k==1)
		{
	      echo "$no is not perfect square number...";
        }
       else
	   {
	      echo "$no is perfect square number...";
        }
   }


?>
</body>
</html>