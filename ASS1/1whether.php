<html>
    <body>
        <form method="POST"> 
            Enter <input type="text" name="lp"> 
            <input type="submit" name="done">
        </form>
    </body>
</html>

<?php

    if(isset($_POST["done"])) {

        $num = $_POST["lp"];

            if($num % 4 == 0) {
                echo $num." is leapyear";
            }
            else {
                echo $num." is not leapyear";
            }
    }
?>