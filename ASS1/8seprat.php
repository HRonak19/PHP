<html>
    <body>
        <form method ="POST" >
            Number  <input type="number" name ="N1">
                    <input type="submit" name ="Done">
        </form>
    </body>
</html>
<?php

    $FD=0;
    if(isset($_POST["Done"])) {

        //$OneD = $_POST['N1'];
       
        // Convert to string and split into an array of digits
        $FD = array($_POST['N1']);

            foreach($FD as $LD) {
                echo $LD;
                print("\n");
            }
    }

?>