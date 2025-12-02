<html>
<head>
    <style>
      body{
            background-color: cyan;
            height: 100vh;
            width: 100vw;
            display: flex;
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

        th {
            background-color: gray;
        }
        
    </style>
</head>

<body>
    
	<?php
	 $no1 = 10;
	 $no2 = 20;
	?>
	
	<table>
	    <tr>
            <th>No1</th>
            <td><?php echo $no1;?></td>
        </tr>
		<tr>
            <th>No2</th>
            <td><?php echo $no2;?></td>
        </tr>
        <tr>
            <th>Addition</th>
            <td><?php echo $no1+$no2; ?></td>
        </tr>
        <tr>
            <th>Subtraction </th>
            <td><?php echo $no1-$no2; ?></td>
        </tr>
        <tr>
            <th>multiplication</th>
            <td><?php echo $no1*$no2; ?></td>
        </tr>
		<tr>
            <th>divison</th>
            <td><?php echo $no1/$no2; ?></td>
        </tr>
	</table>
</body>
    
</html>