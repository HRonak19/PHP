<?php
   $no = 54;
   $rev = 0;
   
   while($no>0){
	   $r = $no % 10;
	   $rev = $rev * 10 + $r;
	   $no = (int)($no / 10);
   }
   
   $no = $rev;
   
   while($no>0){
	   
	   $r = $no % 10;
	   echo "$r &nbsp;&nbsp;&nbsp;&nbsp; ";
	   $rev = $rev * 10 + $r;
	   
	   $no = (int)($no / 10);
	   
   }
?>