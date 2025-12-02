<html>
<head>
<body>
<form method="POST">
NUMBER:   <input type="number" name="num1"><br><br>
   <input type="submit" name="submit" value="value">
 </form>
<?php
    if(isset($_POST['submit']))
	{
		$num1=$_POST['num1'];
      function pal($num1)
     {
	    $r=0;
	    $rev=0;
	    $k=$num1;
	    while($num1>1)
       {
	    $r=$num1%10;
	    $rev=($rev*10)+$r;
	    $num1=$num1/10;
       }
   if($rev==$k)
	   echo "ITS PALINDROME NUMBER";
   else
	   echo "ITS NOT PALINDROME";
   }
   function arm($num1)
   {
	   $r=0;$arm=0;$p=$num1;
	    while($num1>1)
     {
	   $r=$num1%10;
	   $arm=$arm+($r*$r*$r);
	   $num1=$num1/10;
      }
       if($arm==$p)
	    echo "<br>ITS ARMSTRONG NUMBER";
       else
	    echo "<br>ITS NOT ARMSTRONG NUMBER"; 
     }
	 function pri($num1)
	 {
		 $count;
		 for($i=2; $i<=$num1; $i++)
	{
		  $count=0;
		 for($j=1; $j<=$i; $j++)
		 {
			if($i%$j==0)
			{
				$count++;
			}
		 }
	}
		 
	    if($count == 2)
		{
			echo "<br>ITS PRIME NUMBER";
		
		}
		else
		{
			echo "<br>NOT PRIME NUMBER";
		}
	
	 }
     pal($num1);
     arm($num1);
	 pri($num1);
	}
  
?>
</body>
</head>
</html>