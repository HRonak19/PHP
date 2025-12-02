<?php
   
    if(isset($_POST['submit']))
	{
		$t1=$_POST['nam'];
		$t2=$_POST['no'];
		$t3=$_POST['em'];
		$t4=$_POST['m'];
		$t5=$_POST['add'];
		$t7=$_POST['check'];
		$t8=$_POST['ch'];
		$t10=$_POST['pas'];
		echo"<table border=1>";
		echo "<tr><td> NAME:<td>".$t1."</tr>";
		echo "<tr><td> MOBILENO:<td>".$t2."</tr>";
		echo "<tr><td> ADDRESS :<td>".$t5."</tr>";
		echo "<tr><td>E-MAIL   :<td>".$t3."</tr>";
		echo "<tr><td>GENDER   :<td>".$t4."</tr>";
		echo "<tr><td>HOBBIES  :<td>".$t7."</tr>";
		echo "<tr><td>CITY     :<td>".$t8."</tr>";
		echo "<tr><td>PASSWORD :<td>".$t10."</tr>";
     echo "</table>";
		
	}		
?>