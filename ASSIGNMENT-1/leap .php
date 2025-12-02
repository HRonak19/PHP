<html>
<head>
<body>
<form method="POST">
  ENTER THE YEAR:-<input type="number" name="t1"><br>
   <input type="submit" name="submit">
  </form>
<?php
       if(isset($_POST['submit']))
	 {
		   $year=$_POST['t1'];
		   if($year%4==0)
		   {
			   echo "<br> ITS LEAP YEAR";
		   }
		   else
		   {
			   echo "<br> ITS NOT LEAP YEAR";
		   }
	 }
?>
</body>
</head>
</html>