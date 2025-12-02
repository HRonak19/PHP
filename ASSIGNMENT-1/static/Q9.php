<?php
	 $no1 = $no2 = $no3 = 371;
	 $rev = 0;
	 
	 while($no1 > 0){
		 $r= $no1 % 10;
		 $rev = $rev * 10 +$r;
		 $no1 = (int)($no1/10);
	 }
	 
	 if($rev == $no2)
		 echo "$no2 is palindrome....<br>";
	 else
		 echo "$no2 is not palindrome....<br>";
	 
	 $rev = 0;
	 while($no2 > 0){
		 $r= $no2 % 10;
		 $rev = $rev + $r * $r * $r;
		 $no2 = (int)($no2/10);
	 }
	 
	 if($rev == $no3){
		 echo "$no3 is Armstrong....<br>";
	 }
	 else{
		 echo "$no3 is not Armstrong....<br>";
	 }
	 
     $rev = 0;
	 for($i=1; $i<=$no3; $i++){
		 if($no3 % $i == 0)
		 {
			 $rev++;
		 }
	 }
	 
	 if($rev == 2)
		 echo "$no3 is Prime....<br>";
	 else
		 echo "$no3 is not Prime....<br>";
	?>
	