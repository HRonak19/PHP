<?php
    $conn=mysqli_connect("localhost","root","","book");
     $r=$_GET['id'];
	 
	 $sq="delete from book1 where book_id=$r";
	 $ret=mysqli_query($conn,$sq);
	 
	 header("location:book.php");
	 
?>