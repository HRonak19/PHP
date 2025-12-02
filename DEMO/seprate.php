<html>
	<head>
		<body>
			<form method="POST">
				ENTER NUMBER=<input type="number" name="num1"><br><br>
				<input type="submit" name="submit">
			</form>
		</body>	
	</head>
</html>
		
<?php
     if(isset($_POST['submit']))
	 {
		   $num1=$_POST['num1'];
		   $r=0;$c=0;
		   $l=$num1;
		    while($num1>1)
		   {
			  $c=$num1%10;
			
			  $num1=$num1/10;
		    }
		 echo $c."<br>";
		 
		   while($l>1)
		   {
			  $r=$l%10;
			
			  $l=$l/10;
			 break;
		    }
		 echo $r;    	
	 }
?>