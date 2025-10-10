<html>
    <body>
        <form method="POST">
            Enter First <input type="text" name = "N1">
            Enter Second <input type = "text" name = "N2">
            <input type = "submit" name = "done"> <br> <br>
        </from>
    </body>
</html>

<?php

    if(isset($_POST["done"])) {

        $TNO1 = $_POST["N1"] + $_POST["N2"];
        $TNO2 = $_POST["N1"] - $_POST["N2"];
        $TNO3 = $_POST["N1"] * $_POST["N2"];
        $TNO4 = $_POST["N1"] / $_POST["N2"];

       echo "sum : " .$TNO1 ."<br>sub : " .$TNO2 ."<br>multi : ".$TNO3 ."<br>div : ".$TNO4;
    }
?>