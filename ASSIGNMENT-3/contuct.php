<html>
 <style>  
table{    border : 5px gray solid;    padding: 10px; 
   //color: lightgreen; 
   //background-color: blue; 
  } 
</style> 
<body> 
 <form method="POST" action="welcome.php"> 
                                   <center>Contactus.php</center> 
  
 <center><table border="1" cellspacing="0"> 
 <tr> 
 <td><img src="abc.jpg" height="120px" width="150px"></img>  
 <th  colspan="2" height="140px" width="330px" align="left"><b>ADARSH EDUCATIONAL CAMPUS<br>Managed by Takshshial edu. & Char. Trust</b> 
 </tr> 
    <tr> 
        <th>HOME 
        <td colspan="2">Any query contact us.</th> 
 	</tr> 
     <tr> 
 	     <th>ABOUT US 
 	 	 <td>You Name: 
 	 	 <td><input type="text" name="demo" placeholder="enter name.."> 
 	  </tr> 
      <tr> 
 	       <th rowspan="4" valign="top">CONTACT US  	      
		   <td>Email Address: 
 	 	   <td><input type="text" name="email" placeholder="enter Email.."> 
 	  </tr> 
      <tr> 
 	       <td>Contact No: 
 	 	   <td><input type="text" name="num" placeholder="enter number.."> 
 	  </tr> 
      <tr> 
 	      <td>Message: 
 	 	  <td><textarea name="mes" placeholder="enter meassage.."></textarea> 
		  
 	  </tr> 
      <tr> 
 	 	   <td><input type="submit" name="go"> 
 	 	   <td> 
  </tr> 
 	  <tr> 
 	    <th colspan="3">POWERED BY @ ADARSH CAMPUS 
 	  </tr> 
    </table>
	</center>  
 </form> 
 </body> 
</html>
 <?php 
 if(isset($_POST['go'])) 
 { 
 	$name=$_POST['demo']; 
 	$email=$_POST['email']; 
 	$number=$_POST['num'];  	
	$send=$_POST['mes'];  	
	header("Location: welcome.php"); 
 } 
?>
<style> 
 .set{ 
 	 text-align: left;  	 
	 height: 100px;  	 
	 width: 500px; 
 	 
 } 
</style> 
