<html>
<head>
<style>

   body{
	   background-color: grey;
   }
   form{
	   background-color: aqua;
	   width: 40%;
	   height: 60%;
	   padding: 10px 20px;
	   margin: 20px auto;
	   border: 2px solid black;
   }
   table{
	   background-color: aqua;
	   width: 40%;
	   height: 30%;
	   padding: 10px 20px;
	   margin: 20px auto;
	   border: 2px solid black;
	   
   }
   form input{
	   border: 2px solid black;
	   color: black;
	   width: 200px;
   }
   td,th{
	   border: 2px solid black;
	   padding: 10px 20px;
	   text-align: center;
   }

</style>
</head>
<body>
  <form method="POST">
     <label> Sub1 : </label>
	 <input type="number" min="0" max="35" name="sub1" placeholder="Enter mark of subject1....."></input><br><br>
	 <label> Sub2 : </label>
	 <input type="number" min="0" max="35" name="sub2" placeholder="Enter mark of subject2....."></input><br><br>
	 <label> Sub3 : </label>
	 <input type="number" min="0" max="35" name="sub3" placeholder="Enter mark of subject3....."></input><br><br>
	 <label> Sub4 : </label>
	 <input type="number" min="0" max="35" name="sub4" placeholder="Enter mark of subject4....."></input><br><br>
	 <label> Sub5 : </label>
	 <input type="number" min="0" max="35" name="sub5" placeholder="Enter mark of subject5....."></input><br><br>
	 
     <input type="submit" value="Calculate" name="submit"></input>
  </form>
  
  <?php
     if(isset($_POST['submit'])){
		$sub1 = $_POST['sub1'];
		$sub2 = $_POST['sub2'];
		$sub3 = $_POST['sub3'];
		$sub4 = $_POST['sub4'];
		$sub5 = $_POST['sub5'];
		$total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
		$result = "Fail";
		$per = "";
		$grade = "";
		
		if($sub1 > 12 && $sub2 > 12 && $sub3 > 12 && $sub4 > 12 && $sub5 > 12){
			$result = "Pass";
			$per = ($total*100)/(35*5);
			$per = round($per,2);
		}
		
		echo "<table>
                  <tr> 
	                  <th>sub1</th>
					  <td> $sub1 </td>
				  </tr>
				  <tr> 
	                  <th>sub2</th>
					  <td> $sub2 </td>
				  </tr>
				  <tr> 
	                  <th>sub1</th>
					  <td> $sub3 </td>
				  </tr>
				  <tr> 
	                  <th>sub1</th>
					  <td> $sub4 </td>
				  </tr>
				  <tr> 
	                  <th>sub1</th>
					  <td> $sub5 </td>
				  </tr>
				  <tr> 
	                  <th>Total</th>
					  <td> $total </td>
				  </tr>
				  <tr> 
	                  <th>percentage</th>
					  <td> $per </td>
				  </tr>
				  <tr> 
	                  <th>Result</th>
					  <td> $result </td>
				  </tr>
				  
				  
               </table>";
	 }
  ?>
</body>
</html>