<html>
    <body>
        <form method = "POST" >
            Enter <input type = "number" name = "NO">
            <input type = "submit" name = "done">
        </form>
    </body>
</html>

<?php

    if(isset($_POST['done'])) {

        if ($_POST['NO'] > 1000) {
            echo "Kilometer : ".$_POST['NO'] / 1000;
        }
        else {
            echo "<br> Meter : ".$_POST['NO'] * 1000;
        }
    }
?>