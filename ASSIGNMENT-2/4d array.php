<?php

	$a=array
	(
		array(11,22,33),
		array(44,55,66),
		array(77,88,99)
	
	);
	$b=array
	(
		array(100,200,300),
		array(400,500,600),
		array(700,800,900)
	
	);
	$c=array
	(
		array(10,20,30),
		array(40,50,60),
		array(70,80,90)
		
	);
		echo "<pre>";
		print_r($a);
		print_r($b);
		print_r($c);

		for($i=0;$i<count($a);$i++)
		{
			for($j=0;$j<count($a[$i]);$j++)
			{
				echo $a[$i][$j]+$b[$i][$j]."<br>";
		
			}
	
		}
		
			for($i=0;$i<count($a);$i++)
		{
			for($j=0;$j<count($a[$i]);$j++)
			{
				echo $a[$i][$j]+$b[$i][$j]."<br>";
		
			}
	
		}
		
?>