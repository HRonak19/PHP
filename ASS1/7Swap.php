<html> 
    <body> 
        <form method = "POST" > 
            Enter First <input type = "number" name = "N1">
            Enter Second <input type = "number" name = "N2">
            <input type = "submit" name = "done">
        </form>
    </body>
</html>
<?php

    if(isset($_POST['done'])) {

        $_POST['N1'] = $_POST['N1'] + $_POST['N2'];
        $_POST['N2'] = $_POST['N1'] - $_POST['N2'];
        $_POST['N1'] = $_POST['N1'] - $_POST['N2'];

        echo "N1 : ".$_POST['N1'] ."<br>N2 : " .$_POST['N2'];
    
    }
?>