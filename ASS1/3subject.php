<html>
    <body>
        <form method="POST">
            Subject 1 <input type = "number" name="S1">
            Subject 2 <input type = "number" name="S2">
            Subject 3 <input type = "number" name="S3">
            Subject 4 <input type = "number" name="S4">
            Subject 5 <input type = "number" name="S5">
            <input type = "submit" name = "done"> <br> <br>
        </form>
    </body>
</html>

<?php

    if(isset($_POST["done"])) {

        $ST = $_POST['S1'] + $_POST['S2'] + $_POST['S3'] + $_POST['S4'] + $_POST['S5'];

        $Pre = $ST / 5 ;

        echo "TOTAL : ".$ST ."<br> Preantage : ".$Pre."%<br>" ."Grad : ";

        if($Pre <= 95 && $Pre > 90)  {
            echo "A+";
        }
        else if($Pre <= 90 && $Pre < 75) {
            echo "A";
        }
        else if ($Pre <=75 && $Pre < 60) {
            echo "B";
        }
        else if($Pre <=60 && $Pre < 55) {
            echo "C";
        }
        else if($Pre <= 55 && $Pre < 40) {
            echo "D";
        }
        else {
            echo "faile";
        }
    }
?>