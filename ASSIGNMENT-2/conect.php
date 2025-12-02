<?php
$conn=mysqli_connect("localhost","root","","student");
if(isset($_POST['done']))
{
	$r=$_POST['no'];
	$nam=$_POST['name'];
	
$conn=mysqli_connect('localhost','root','','student');
$ins=("insert into  stud_info values($r,'$nam')");

$q=mysqli_query($conn,$ins);

if(!$q)
{
	echo "not data insert ..";
}
else
{
	echo "data insert";}
}
if(isset($_POST['dele']))
{
	
	$r=$_POST['no'];
	$nam=$_POST['name'];
	$conn=mysqli_connect("localhost","root","","student");
	$del="delete from stud_info where name='$nam'";
	$p=mysqli_query($conn,$del);
	if(!$p)
	{
		echo "detat not deleted ";
	}
	else
	{
		echo "data deleted";
	}
}
if(isset($_POST['up']))
{
	$r=$_POST['no'];
	$nam=$_POST['name'];
	$conn=mysqli_connect("localhost","root","","student");
	$ud="update stud_info set rno='$r' where name='$nam'";
	$k=mysqli_query($conn,$ud);
	if(!$k)
	{
		echo "not update done";
	}
	else
	{
		echo "done update";
	}
}
if(isset($_POST['display']))
{
	$nam=$_POST['name'];
	$di="select * from stud_info ";
	$di1=mysqli_query($conn,$di);
	echo "<table border='1'>";
	while($row=mysqli_fetch_assoc($di1))
	{
		  echo "<tr><td>rollno<td>".$row['rollno']."</tr><tr><td>name<td>".$row['name']."</tr>"; 
	}
	echo "</table>";
}

if(isset($_POST['display1']))
{
	$di="select * from stud_info order by name desc";
	$di1=mysqli_query($conn,$di);
	echo "<table border='1'>";
	while($row=mysqli_fetch_assoc($di1))
	{
		  echo "<tr><td>rollno<td>".$row['rollno']."</tr><tr><td>name<td>".$row['name']."</tr>"; 
	}
	echo "</table>";
}


if(isset($_POST['se']))
{
	$di="select * from stud_info ";
	$nam=$_POST['name'];
	$di1=mysqli_query($conn,$di);
	echo "<table border='1'>";
	while($row=mysqli_fetch_assoc($di1))
	{
		if($num==$row['name'])
		{
			$c=1;
			
		}
		 
	}
	if($c=1)
	{
			echo $num."is in table";
			
	}
	
}
?>
<html>
<body>
<form method="post" action="search.php">
	<br>
  <input type="text" name="name" placeholder="      Enter Name.."><br>
  <input type="text" name="no" placeholder="      Enter Roll number.."><br><br>
  <input type="submit" name="done" value="  insert  ">
  <input type="submit" name="dele" value="  delete  ">
  <input type="submit" name="up" value="  update  ">
  <br>
  <input type="submit" name="display" value="  desc  ">
  <input type="submit" name="display1" value="  asen  ">
  <input type="submit" name="se" value="  search  ">
</form>
</body>
</html>
<!--//$up=("UPDATE stud_info SET name='$nam' WHERE rno=1");
//$del="delete from stud_info where name='raj'";]
//$l=mysqli_query($conn,$up);
//$del=mysqli_query($conn,$del);
//echo $r." ".$nam." <br>";


