<html>
<body>
<form method="POST">
NUMBER:-<input type="number" name="t1"><br><br>
   <input type="submit" name="submit">
 </form>
<?php
    if(isset($_POST['submit']))
	{
		
	  $no=$_POST['t1'];
    echo "Prime numbers between 1 to 100 : <br>";
	for($i=2; $i<=$no; $i++){
		$count=0;
		for($j=1; $j<=$i; $j++){
			if($i%$j==0){
				$count++;
			}
		}
		 
	    if($count == 2){
			echo "$i<br>";
		}
	}
  }
    
?>