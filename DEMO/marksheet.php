<?php

	$a=20;$b=30;$c=40;$d=50;$e=60;$total;$per;
	
	echo"<br>sub1=".$a;
	echo"<br>sub2=".$b;
	echo"<br>sub3=".$c;
	echo"<br>sub4=".$d;
	echo"<br>sub5=".$e;
	
	$total=$a+$b+$c+$d+$e;
	
	$per=$total/5;
	
	echo"<br><br>total=".$total ."<br> Per = ".$per;
	
	if($per > 90){
		echo"<br>grade A";
	}
	else if($per >= 70 && $per < 90){
		echo"<br>grade B";
	}
	else if($per >= 50 && $per < 70){
		echo"<br>grade C";
	}
	else if($per >= 40 && $per < 50){
		echo"<br>grade D";
	}
	else {
		echo"<br>FAIL";
	}
?>