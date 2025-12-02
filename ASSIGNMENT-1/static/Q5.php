<?php
   $no = 9;
   $k = 1;
   for($i=1; $i<$no; $i++){
	   if($i * $i == $no){
		   $k = 2;
		   break;
	   }
   }
   
   if($k==1){
	   echo "$no is not perfect square number...";
   }
   else{
	   echo "$no is perfect square number...";
   }


?>