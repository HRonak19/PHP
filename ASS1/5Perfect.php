<html>
    <body>
        <form method = "POST" >
            Enter <input type = "number" name = "NO">
            <input type ="submit" name = "done"> <br> <br>   
        </form>
    </body>
</html>

<?php 

    if(isset($_POST['done'])) {

        $TM=1;

            for($i=1; $i<=$_POST['NO']; $i++) {

                if($i * $i == $_POST['NO']) {
                    $TM=2;
                    break;
                } 
            }
            if($TM == 2) {
                echo "Prefact number ";
            }
            else {
                echo "Not Prefact Numbr ";
            }
    }
?>