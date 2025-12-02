<?php
    $sub1=95;
	$sub2=99;
	$sub3=92;
	$sub4=20;
	$sub5=88;
	$total=0;
	$per=0;
	$rollno=19;
	echo $rollno;
	echo "<br><b>JOSHI JAYOM";
	echo $sub1;
	echo "<br>";
	echo $sub2;
	echo "<br>";
	echo $sub3;
	echo "<br>";
	echo $sub4;
	echo "<br>";
	echo $sub5;
	$total=$sub1+$sub2+$sub3+$sub4+$sub5;
	echo "<br>TOTAL OF SUBJECT=";
	echo $total;
	$per=$total/5;
	echo "<br>PERCENTAGE=";
	echo $per;
	if($per>"90")
	  echo "<br>A GREADE";
    else if($per>"75"&&$per>"90")
		echo "<br>B IS GREADE";
	else if($per>"50"&&$per>"75")
		echo "<br>C IS GREADE";
	 else 
		 echo "<br><color=red>PERSON IS FAILED";
?>