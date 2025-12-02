<?php

$a=array(10,20,30,40);
$r=count($a);
	
	echo " Element of Array :- ".$r."<br>";
	
	$sum=0;
	
	for($i=0;$i<$r;$i++)
	{
		$sum=$sum+$a[$i];
		echo $a[$i]."<br>";
	
	}
	echo " Sum of Element :- ".$sum;


?>