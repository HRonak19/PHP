<html>
<body>
<center><table border="2" cellspacing="0">
<form method="POST">
<tr>
<td>USER NAME
<td><input type="text" name='t1' placeholder="enter user name..">
</tr>
<tr>
<td>PASSWORD
<td><input type="password" name="t2" placeholder="enter password..">
</tr>
<tr>
<td colspan="2"><center><input type="submit" name="login" value="login"></center>
</tr>
</table></center>
</form>
<?php
         $conn=mysqli_connect("localhost","root","","jayom");
        if(isset($_POST['login']))
		{
			$us=$_POST['t1'];
			$pass=$_POST['t2'];
			echo "<center>registration is not complete please registration<a href='studinfo.php'>register</a></center>";
			$sq="select * from stud_info where username='$us' and password='$pass'";
			$re=mysqli_query($conn,$sq);
		   $row=mysqli_fetch_assoc($re);
		    $s=mysqli_num_rows($re);
			if($s==1)
			{
				echo "<br><br><center><table border='2' cellspacing='0'>";
			echo "<tr><td>stud_id<td>".$row['stud_id']."</tr>";
			echo "<tr><td>stud_name<td>".$row['stud_name']."</tr>";
			echo "<tr><td>stud_address<td>".$row['stud_add']."</tr>";
			echo "<tr><td>stud_std<td>".$row['stud_std']."</tr>";
			echo "<tr><td>stud_dob<td>".$row['stud_dob']."</tr>";
			echo "<tr><td>stud_email<td>".$row['stud_email']."</tr>";
			
			echo "</table></center>";
			}
			else if($s>1)
			{
				echo " value is duplicate";
			}
			else if($s==0)
			{
				echo "record is not found";
			}
		    
		}
?>