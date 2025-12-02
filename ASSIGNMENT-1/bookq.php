<html>
<head>
<body>
<form method="POST">
ENTER THE BOOK NAME:-<input type="tax" name="t1"><br>
ENTER THE QUANTITY :-<input type="number" name="t2"><br>
ENTER THE BOOK PRICE:-<input type="number" name="t3"><br>
   <input type="submit" name="submit">
   </form>
<?php
    if(isset($_POST['submit']))
	{
		$name=$_POST['t1'];
		$qun=$_POST['t2'];
		$pri=$_POST['t3'];
		$total=0;
		$total=$pri*$qun;
		
		echo "<br> BOOK NAME              :-".$name;
		echo "<br> BOOK QUANTITY          :-".$qun;
		echo "<br> BOOK PRICE             :-".$pri;
		echo "<br> TOTAL BOOK OF THE PRICE:-".$total;
	}
?>
</body>
</head>
</html>