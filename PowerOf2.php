<?php
    $n = readline("Enter number :"); //user input
    if($n >= PHP_INT_MIN and $n <= PHP_INT_MAX){ //input validaton
        for($i = 0; $i <= $n; $i++){
            echo pow(2, $i) . "," . " "; //calculating power of 2
        }
    }
    else{
        echo "Enter valid number";
    }
?>