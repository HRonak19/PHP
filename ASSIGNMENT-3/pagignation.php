<?php 
$roll=$name=''; 
 $con=mysqli_connect("localhost","root","","student");   
   if(isset($_POST['f'])) 
  {  
    
 	  $g="SELECT * FROM stud_info"; 
 	  $row=mysqli_query($con,$g); 
       $r=mysqli_fetch_assoc($row); 
 	 
 	  $roll=$r['rollno']; 
 	  $name=$r['name']; 
  } 
    
   if(isset($_POST['n'])) 
   { 
 	   $i=$_POST['rollno']+1; 
 	   $g="SELECT * FROM info where rollno = $i"; 
 	  $row=mysqli_query($con,$g); 
       $r=mysqli_fetch_assoc($row); 
 	  
 	  $roll=$r['rollno']; 
 	  $name=$r['name']; 
   } 
   
   if(isset($_POST['p'])) 
   { 
 	   $i=$_POST['roll']-1; 
 	   $p="select * from info where rollno = $i"; 
 	   $row=mysqli_query($con,$p); 
 	   $r=mysqli_fetch_assoc($row); 
 	     
 	  $roll=$r['rollno']; 
 	  $name=$r['name']; 
   } 
    if(isset($_POST['l'])) 
   { 
 	   $get=mysqli_query($con,"select * from info order by rollno desc"); 
 	   $r=mysqli_fetch_assoc($get); 
 	
 	  $roll=$r['rollno']; 
 	  $name=$r['name']; 
   } 
?> 
<html> 
<body> 
<form method="POST"><br><br> 
 <input type="text" name="roll" value="<?php echo $roll;?>"><br> 
 <input type="text" name="nam" value="<?php echo $name;?>"><br> 
 
  <input type="submit" value="first" name="f"> 
  <input type="submit" value="next" name="n"> 
  <input type="```" value="pre" name="p"> 
  <input type="submit" value="last" name="l">  
  </form>      
</body> 
</html> 

