<html>
    <body>
        <form method = "POST" >
            First <input type = "number" name = "N1">
            Second <input type = "number" name = "N2">
            Last <input type = "number" name = "N3">
            <input type = "submit" name = "done">
        </form>
    </body>
</html>

<?php

    if(isset($_POST['done'])) {

      if($_POST['N1'] > $_POST['N2'] && $_POST['N1'] > $_POST['N3']) {
            echo "First Number is Big";
      }
      else if($_POST['N2'] > $_POST['N1'] && $_POST['N2'] > $_POST['N3']) {
            echo "Second Number is Big ";
      }
      else {
            echo "Last Number is Big";
      }
    }
?>