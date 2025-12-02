<html>
<body>
<form method="POST">
NUMBER:<input type="number" name="t1"><br><br>
   <input type="submit" name="submit">
 </form>
<?php
   if(isset($_POST['submit']))
   {
	   $no=$_POST['t1'];
   
	echo "Armstrong numbers between 1 to 500 : <br>";
	for($i=1; $i<=$no; $i++){
		$no1 = $i;
		$rev=0;
		while($no1 > 0){
		    $r= $no1 % 10;
		    $rev = $rev + ($r * $r * $r);
		    $no1 = (int)($no1/10);
	     }
		 
	    if($rev == $i){
			echo "$i<br>";
		}
	}
   }
    
?>
</body>
</html>