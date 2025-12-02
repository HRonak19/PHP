<html>
<head>
    <style>
	 body{
            background-color: cyan;
            height: 100vh;
            width: 100vw;
            display: block;
            justify-content: center;
            align-items: center;
            font-size: 20px;
        }
		
	   table {
            background-color: white;
            border-collapse: collapse;
            height: 200px;
            width: 400px;
        }

        th,td {
            border: 2px solid black;
            padding: 10px;
            text-align: center;
        }
	
	</style>
</head>
<body>
    <form method="POST">
	    <input type="text" name="bookname" placeholder="enter book name" required><br>
	    <input type="number" name="Quantity"  max="100" placeholder="enter book Quantity" required><br>
	    <input type="number" name="Price" max="1000" step="10"  placeholder="enter book Price" required><br>
		<input type="submit" name="submit" value="add"><br>
	</form>
	
	<?php
	
	   if(isset($_POST['submit'])){
		   $name = $_POST['bookname'];
		   $quantity = $_POST['Quantity'];
		   $price = $_POST['Price'];  
           $total = $price * $quantity;
		   echo "<br><table>
	    <tr>
		  <th>Book_name
		  <th>Quantity
		  <th>Price
		  <th>Total
		</tr>
		<tr>
		  <td>  $name
		  <td>  $quantity
		  <td>  $price
		  <td>  $total
		</tr>
	</table>";
	   }	   
	?>
	
</body>
</html>