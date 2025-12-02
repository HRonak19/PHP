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
		echo "<pre>";
		print_r($a);
		print_r($b);

		for($i=0;$i<count($a);$i++)
		{
			for($j=0;$j<count($a[$i]);$j++)
			{
				echo $a[$i][$j]+$b[$i][$j]."<br>";
		
			}
	
		}

?>