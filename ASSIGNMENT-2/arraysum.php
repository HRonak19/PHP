<?php

	$a=array
	(
		array(10,20,30),
		array(40,50,60)
	
	);
	$b=array
	(
		array(10,20,30),
		array(40,50,60)
	
	);
	$c=array
	(
		array(10,20,30),
		array(40,50,60)
	
	);
	

		for($i=0;$i<count($a);$i++)
		{
			for($j=0;$j<count($a[0]);$j++)
			{
				for($k=0;$k<count($a[0][0]);$k++)
				{	
		     		echo $a[$i][$j][$k]+$b[$i][$j][$k]+$c[$i][$j][$k]."<br>";
				}
			}
	     
		}

?>