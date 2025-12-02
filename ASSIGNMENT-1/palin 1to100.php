<html>
<body>
<form method="POST">
NUMBER:-<input type="number" name="t1"><br>
   <input type="submit" name="submit">
 </form>
 <?php
	echo "Palindrome numbers between 1 to 100 : <br>";
	if(isset($_POST['submit']))
	{
		  $no=$_POST['t1'];
	
	       for($i=1; $i<=$no; $i++)
		   {
		     $no1 = $i;
		     $rev=0;
		     while($no1 > 0)
		    {
		      $r= $no1 % 10;
		      $rev = $rev * 10 +$r;
		      $no1 = (int)($no1/10);
	        }
		 
	        if($rev == $i)
			{
			 echo "$i<br>";
		    }
	       }
	}
    
?>
</body>
</html>