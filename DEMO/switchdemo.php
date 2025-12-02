<html>
	<body>
		<form method="POST">
			Value1 :- <input type="text" name="a1"><br>
			Value2 :- <input type="text" name="a2"><br>
			<select name='ch'>
				
				<option value="add">Addition</option>
				<option value="sub">Subtraction</option>
				<option value="mul">|Multiplication</option>
				<option value="div">Division</option>
				
			</select><br>
			<input type="submit" name="done">
				
		</form>
	</body>
</html>
<?php
	if(isset($_POST['done']))
	{	
		$a=$_POST['a1'];
		$b=$_POST['a2'];
		$ch=$_POST['ch'];
		
		/*if($ch=='add')
		{
			$sum=$a+$b;
			echo "SUM :- ".$sum;
		}
		elseif($ch=='sub')
		{
			$sub=$a-$b;
			echo "SUB :- ".$sub;
		}
		elseif($ch=='mul')
		{
			$mul=$a*$b;
			echo "MUL :- ".$mul;
		}
		else
		{
			$div=$a/$b;
			echo "DIV :- ".$div;
		}
		*/
		
		switch($ch)
		{
			case 'add':
			$sum=$a+$b;
			echo "SUM :- ".$sum;
			break;
			
			case 'sub':
			$sub=$a-$b;
			echo "SUB :- ".$sub;
			break;
			
			
			case 'mul':
			$mul=$a*$b;
			echo "MUL :- ".$mul;
			break;
			
			case 'div':
			$div=$a/$b;
			echo "DIV :- ".$div;
			break;
			
		}
	}
?>