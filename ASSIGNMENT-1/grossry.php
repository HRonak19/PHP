<html>
<head>
<body>
<form method="POST">
  ENTER THE BASIC SALARY:-<input type="number" name="t1"><br>
   <input type="submit" name="submit">
  </form>
<?php
         if(isset($_POST['submit']))
		 {
			 $basicsalary=$_POST['t1'];
			 $ta=0;
			 $da=0;
			 $pf=0;
			 $tax=0;
			 $netsalary=0;
			 
			 $da=($basicsalary*5)/100;
			 $ta=($basicsalary*10)/100;
			 $pf=($basicsalary*5)/100;
			 $tax=($basicsalary*5)/100;
			 
             $netsalary=$basicsalary+$da+$ta-$pf-$tax;
            echo "<br> BASIC SALARY         :-".$basicsalary; 
            echo "<br> TRAVILLING ALLOWANCE :-".$ta;
            echo "<br> DRIVING ALLOWANCE    :-".$da;
            echo "<br> PROVIDENT FUND       :-".$pf;
            echo "<br>  TAX OF SERVICES     :-".$tax;
			echo "<br> TOTAL NET SALARY     :-".$netsalary;
           			
			 
		 }
?>
</body>
</head>
</html>