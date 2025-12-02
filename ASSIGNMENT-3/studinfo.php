<html>
<body> 
<center><h1>Student Registration form </h1></center>
<form method="POST">
<center><table border='2' cellspacing='0'>
<tr>
<td colspan='2'><b><center>Student information</center></b>
</tr>
<tr>
<td>USER NAME
<td><input type="text" name='t1' placeholder="enter user name..">
</tr>
<tr>
<td>PASSWORD
<td><input type="password" name="t2" placeholder="enter password..">
</tr>
<tr>
<td>STUD_ID
<td><input type="text" name="t3" placeholder="enter stud_id">
</tr>
<tr>
<td>NAME
<td><input type="text" name="t4" placeholder="enter name...">
</tr>
<tr>
<td>ADDRESS
<td><textarea name="t5" placeholder="enter address.."></textarea>
</tr>
<tr>
<td>STANDARD
<td><input type="number" name="t6" placeholder="enter standard..">
</tr>
<tr>
<td> DATE OF BIRTH
<td><input type="date" name="t7" placeholder="enter date of birth..">
</tr>
<tr>
<td>EMAIL
<td><input type="email" name="t8" placeholder="enter email..">
</tr>
<tr>
<td colspan="2"><center><input type="submit" name="submit"></center>
</tr>
</table></center>
</form>
<?php
  $c=0;
      $conn=mysqli_connect("localhost","root","","jayom");
       if(isset($_POST['submit']))
	   {
		   $us=$_POST['t1'];
		   $pass=$_POST['t2'];
		   $id=$_POST['t3'];
		   $name=$_POST['t4'];
		   $add=$_POST['t5'];
		   $std=$_POST['t6'];
		   $dob=$_POST['t7'];
		   $em=$_POST['t8'];
		   
           $sq="insert into stud_info value('$id','$name','$add',$std,'$dob','$em','$us','$pass')";
		   $ret=mysqli_query($conn,$sq);
		     
		 
		   $r="select stud_email from stud_info";
		   $tm=mysqli_query($conn,$r);
		   while($row=mysqli_fetch_assoc($tm))
		   {
			   if($em==$row['stud_email'])
			   {
				   $c=1;
			   }
		   }
		   if($c==1)
		   {
			   echo "<center>please enter unique email id</center>";
		   }
		   else
		   {
			   echo "<center><p> Welcome MR/Miss  ".$name."You are successfully registerd...!</p></center>";
			   echo "<center><p>Registration IS COMPLETE PLEASE LOGIN<a href='login.php'>login?</a></p></center>";
		   }
		   
		   
	   }
?>