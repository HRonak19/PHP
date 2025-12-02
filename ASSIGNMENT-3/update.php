<html>
<body>
<form method="POST">
BOOK_NAME<input type="text" name="t1"><br>
AUTHOR_NAME<input type="text" name="t2"><br>
PRICE<input type="text" name="t3"><br>
QUANTITY<input type="text" name="t4"><br>
<input type="submit" name="submit">
</form>
<?php
     $conn=mysqli_connect("localhost","root","","book");
	 
	  $r=$_GET['id'];
	  if(isset($_POST['submit']))
	  {
		  $bookn=$_POST['t1'];
		  $auth=$_POST['t2'];
		  $pr=$_POST['t3'];
		  $qua=$_POST['t4'];
		  
		  $sq="update book1 set book_name='$bookn',author_name='$auth',price=$pr,quantity=$qua,net_amount=$pr*$qua where book_id=$r";
		  $ret=mysqli_query($conn,$sq);
		  
		  header("location:book.php");
	  }
?>