<?php
    $n = readline("Enter number :"); //user input
    if($n >= PHP_INT_MIN and $n <= PHP_INT_MAX){ //input validation
        if($n == 0 or $n == 1){
            echo $n . " " . "has no prime factors";
        }
        else{
            for($i = 2; $i*$i <= $n; $i++){
                //condition for prime factors
                while($n % $i == 0){
                    $n = $n / $i;
                    echo $i . "," . " ";
                }
            }
            if($n != 1){
                echo $n;
            }
        }
    }
    else{
        echo "Enter valid number";
    }
?>