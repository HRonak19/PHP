<?php
  $basic=20000;
  $ta=0;
  $da=0;
  $pf=0;
  $tax=0;
             $da=($basic*5)/100;
			 $ta=($basic*10)/100;
			 $pf=($basic*5)/100;
			 $tax=($basic*5)/100;
			 $netsalary=$basic+$da+$ta-$pf-$tax;
            echo "<br> BASIC SALARY         :-".$basic; 
            echo "<br> TRAVILLING ALLOWANCE :-".$ta;
            echo "<br> DRIVING ALLOWANCE    :-".$da;
            echo "<br> PROVIDENT FUND       :-".$pf;
            echo "<br>  TAX OF SERVICES     :-".$tax;
			echo "<br> TOTAL NET SALARY     :-".$netsalary;
?>