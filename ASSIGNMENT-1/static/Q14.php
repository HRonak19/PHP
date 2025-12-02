<?php
    $price = 1000;
    $rate = 10;
    $term = 2;
    
    $interest = $price * rate * term/100;
    
    echo "price : $price<br>";
    echo "rate : $rate<br>";
    echo "term : $term<br>";
    echo "simple interest : $interest";
    
?>