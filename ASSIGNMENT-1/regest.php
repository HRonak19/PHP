<html>
<head>
<style>
.p1
{
	 height: 350px;
	 width: 300px;
	 padding:30px;
}
</style>
<body>
<h1> REGISTRATION FORM </h1><br><br>
<form class="p1" method="POST" action="abc.php" >
NAME :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="nam"><br>
MOBILE NO:&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="no"><br>
ADDRESS:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="add"></textarea><br>
E-MAIL :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="em"><br>
GENDER :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="m" value="male">MALE
        <input type="radio" name="m" value="female">FEMALE<br>
HOBBIES:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="check" value="cricket">CRICKET
        <input type="checkbox" name="check" value="hocky">HOCKY
CITY   :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="ch">
          <option value="t6">
		      SELECT OPTION
		   </option>
          <option value="botad">
		        BOTAD
		   </option>
		  <option value="rajkot">
		        RAJKOT
		  </option>
		   <option value="surat">
		       SURAT
		 </option>
		</select><br>
PASSWORD:&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="pas"><br>
<br><br>
  <center> <input type="submit" name="submit"> </center> 
</form>	
	
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
</body>
</head>
</html>