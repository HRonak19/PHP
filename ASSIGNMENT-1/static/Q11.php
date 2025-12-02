<?php
	echo "Palindrome numbers between 1 to 100 : <br>";
	for($i=1; $i<=100; $i++){
		$no1 = $i;
		$rev=0;
		while($no1 > 0){
		    $r= $no1 % 10;
		    $rev = $rev * 10 +$r;
		    $no1 = (int)($no1/10);
	     }
		 
	    if($rev == $i){
			echo "$i<br>";
		}
	}
    
?>