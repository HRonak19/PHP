<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marksheet</title>
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
    $a = 90;
    $b = 91;
    $c = 92;
    $d = 93;
    $e = 4;
    $per = '-';
    $total = $a + $b + $c + $d + $e;
    $result = $a > 33 && $b > 33 && $c > 33 && $d > 33 && $e > 33 ? "Pass" : "Fail";
    $grade = '-';
    if ($result == "Pass") {
        $per = $total / 5;
        if ($per >= 90)
            $grade = "A1";
        else if ($per >= 80)
            $grade = "A2";
        else if ($per >= 70)
            $grade = "B1";
        else if ($per >= 60)
            $grade = "B2";
        else if ($per >= 50)
            $grade = "C";
        else if ($per >= 40)
            $grade = 'D';
       
    }
    ?>

    <table>
        <tr>
            <th>Subject</th>
            <th>Marks</th>
        </tr>
        <tr>
            <td>Subject 1</td>
            <td><?php echo $a; ?></td>
        </tr>
        <tr>
            <td>Subject 2</td>
            <td><?php echo $b; ?></td>
        </tr>
        <tr>
            <td>Subject 3</td>
            <td><?php echo $c; ?></td>
        </tr>
        <tr>
            <td>Subject 4</td>
            <td><?php echo $d; ?></td>
        </tr>
        <tr>
            <td>Subject 5</td>
            <td><?php echo $e; ?></td>
        </tr>
        <tr>
            <th>Total</th>
            <td><?php echo $total; ?></td>
        </tr>
        <tr>
            <th>Percentage</th>
            <td><?php 
            if ($result == "Pass") 
            {
				$per = $total / 5;
                echo "$per%";
            }
            else
            {
            	echo $per;
            }	?></td>
        </tr>
        <tr>
            <th>Grade</th>
            <td><?php echo $grade; ?></td>
        </tr>
        <tr>
            <th>Result</th>
            <td style="color: <?php echo ($result == 'Pass') ? 'blue' : 'red'; ?>; background-color: <?php echo ($result == 'Pass') ? '' : 'yellow'; ?>" > <?php echo $result; ?>
            </td>
        </tr>

    </table>
</body>

</html>