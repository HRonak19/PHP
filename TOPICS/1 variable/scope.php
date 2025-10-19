<?php

    $A=10;
    $B=20;   // global scope

function demo() {

    global $A,$B;   
    static $C = $A+$B;  // c is static scope
    echo $C; // local scope
    $C++;
}
demo(); 
demo(); 
?>