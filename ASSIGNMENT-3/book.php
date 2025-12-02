<script>
  function del()
  {
	  let a=confirm("do you want to delete if then press ok");
	  return a;
  }
</script>
<?php
   $conn=mysqli_connect("localhost","root","","book");
   echo "<table border='1' cellspacing='0'>";
   echo "<tr><th>BOOKID</th>";
   echo "<th>BOOKNAME</th>";
   echo "<th>AUTHORNAME</th>";
   echo "<th>PRICE</th>";
   echo "<th>QUANTITY</th>";
   echo "<th>NET_AMOUNT</th>";
   echo "<th>#DELETE</th>";
   echo "<th>#UPADATE </th></tr>";
   
   $sql="select * from book1";
   $ret=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_assoc($ret))
   {
	   echo "<tr><td>".$row['book_id'];
	   echo "<td>".$row['book_name'];
	   echo "<td>".$row['author_name'];
	   echo "<td>".$row['price'];
	   echo "<td>".$row['quantity'];
	   echo "<td>".$row['net_amount']=$row['price']*$row['quantity'];
	   $id=$row['book_id'];
	   echo "<td><a href='delete.php?id=$id' onclick='return del()'>delete</a>";
	   echo "<td><a href='update.php?id=$id'>update</a></tr>";
   }
   echo "</table>";
?>