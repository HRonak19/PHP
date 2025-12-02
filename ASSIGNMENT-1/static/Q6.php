<?php
    $value = 10;
	$parameter = "meter";
	
	if($parameter == "kilometer"){
		echo "$value$parameter = ".$value*1000;
		echo "meter";
	}
	else{
		echo "$value$parameter = ".$value/1000;
		echo "kilometer";
	}
?>