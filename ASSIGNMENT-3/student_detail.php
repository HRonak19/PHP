<html>
 <style>
 .main{
	 height:500px;
	 width:400px;
	 //background-color: red;
	 padding-left:20px;
	 text-align:center;
    }
 </style>
 <body>
  <div class="main">
    <form>
		<h2><u>Student Registration Form</u></h2>
			<table  cellpadding="10px" border="1" cellspacing="0">
			
    <tr>
		<td colspan="2" style="text-align:center;"><b> STUDENTD INFORMATION 
	</tr>
		
    <tr>
	    <td>USERNAME<td><input type="text" name="u_name">
	</tr>
	
	<tr>
	    <td>PASSWORD<td><input type="text" name="pass">
	</tr>
	
	<tr>
	    <td>STUD_ID<td><input type="text" name="id">
	</tr>
	
	<tr>
	    <td>NAME<td><input type="text" name="pname">
	
		<?php
		/*
			if(isset($_POST['t1']))
			{
				$name=$_POST['t1'];
	
			}
			if(empty($name))
			{
				echo "<font color='red'> <br> please enter id <.font>";
	
			}
		*/
		?>

	</tr>
	
	<tr>
	    <td>ADDRESS<td><input type="text" name="point">
	</tr>
	
	<tr>
	    <td>STANDARD<td><input type="text" name="std">
	</tr>
	
	<tr>
	    <td>DOB<td><input type="text" name="date_b">
	</tr>
	
	<tr>
	    <td>EMAIL<td><input type="text" name="email">
	</tr>
	
	<tr>
	    <td colspan="2" style="text-align:center;"><input type="submit" name="done" value="Register">
	</tr>
	
	</table>
	
  </form>
  
  <p>You Have To Login ? <a href="login.php">Login</a></p>
 
  </div>
 </body>
</html>

<?php 
 $c=0;
 $con=mysqli_connect("localhost","root","","student");
 
 if(isset($_POST['done']))
 {
	$u_name=$_POST['u_name'];
	$pass=$_POST['pass'];
	$id=$_POST['id'];
	$name=$_POST['pname'];
	$location=$_POST['point'];
	$std=$_POST['std'];
	$dob=$_POST['date_b'];
	$email=$_POST['email'];
	
	$ins="insert into student_detail values('$id','$name','$location',$std,'$dob','$email','$u_name','$pass')";
	$done=mysqli_query($con,$ins);
	$find="select stud_email from student_detail";
	$f=mysqli_query($con,$find);
	
	while($r=mysqli_fetch_assoc($f))
	{
		if($r['stud_email']==$email)
		{
			$c=1;
		}
		
	}
	if($c==1)
	{
		echo "<br><font size='5px' style='background-color:black; color:blue;'>".$email." is allredy Stand <b>Make uniqe emali id..</b></font>";
	}
	else
	{
		echo "<br><font size='5px'>Welcome Mr/Miss <b>".$name."</b>You are Successfully Registered..!</font>";
	}
	
 }
 
?>