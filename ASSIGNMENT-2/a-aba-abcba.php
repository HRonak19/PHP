<html>
	<body>
		<form method="post">
		
			enter value <input type="text" name="data">
			<input type="submit" name="done">
		</form>
<?Php
if(isset($_POST['done']))
{
	$n=$_POST['data'];
	
	for($i=1;$i<=$n;$i++)
	{
		for($j=0;$j<$i;$j++)
		{
			echo chr(65+$j)." ";
		}
		
		for($j=$i-2;$j>=0;$j--)
		{
			echo chr(65+$j)." ";
		}
		echo "<br>";
	}
	 
}

?>
	</body>
</html>