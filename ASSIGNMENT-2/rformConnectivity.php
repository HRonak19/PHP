<html>
<body>
	<form method="POST">
	
		NAME <input type="text" name="t1">89/6
		<br>
		ADDRESS <textarea name="add">
		</textarea>
		<br>
		PHONE NO. <input type="text" name="t3">
		<br>
		E-MAIL <input type="text" name="t4">
		<br>
		CITY :- <select name="ch">
		<br>
			<option value="select">Select City</option>
			<option value="botad">Botad</option>
			<option value="rajkot">Rajkot</option>
			<option value="surat">Surat</option>
			<option value="jamnagar">jamnagar</option>
			<option value="dang">dang</option>
	   
   </select><br>
   
    GENDER :- <input type="radio" name="m" value="Male">Male
		<input type="radio" name="m" value="Female">Femal<br>
   
    HOBBICS :- <input type="checkbox" name="check" value="Cricket">Cricket
		<input type="checkbox" name="check" value="Chess">Chess<br>
   
    PASSWORD :- <input type="password" name="pass" maxlength="7"><br>
		<input type="submit" name="done" class="ok"></b><br>
	
	</form>
</body>
</html>

   <?php
 if(isset($_POST['done']))
 {
	 $n=$_POST['t1'];
	 $p=$_POST['add'];
	 $e=$_POST['t3'];
	 $a=$_POST['t4'];
	 $s=$_POST['ch'];
	 $g=$_POST['m'];
	 $check=$_POST['check'];
	 $w=$_POST['pass'];
	 echo "<p class='lp'><table border='1' callspan='0'><tr><td>Name<td>".$n."</tr><tr><td>Phone No<td>".$p;
	 echo "</tr><tr><td>Email<td>".$e."</tr><tr><td>Address<td>".$a."</tr><tr><td>City<td>".$s;
	 echo "</tr><tr><td>Gender<td>".$g."</tr><tr><td>Hobiess<td>".$check."</tr><tr><td>Password<td>".$w;
	 echo "</table></p>";
 }
?>


