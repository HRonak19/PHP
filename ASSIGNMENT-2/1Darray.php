<?php

$a= array(10,30);
$b= array(10,35);

$i=0;$j=0;$sum=0;

for($i=0;$i<count($a);$i++)	
{	
		echo "<br>";
	for($j=0;$j<count($b);$j++)
	{
		$sum=$a[$i]+$b[$j];
		echo "sum=".$sum."<br>";

	}

}
echo "<per>";

?>