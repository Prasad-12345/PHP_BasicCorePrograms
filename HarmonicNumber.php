<?php
    $n = readline("Enter number :"); //user input

    if($n >= PHP_INT_MIN and $n <= PHP_INT_MAX and $n > 0){  //input validation
        $harmonicNumber = 1;
        for($i = 1; $i <= $n; $i++){
            $harmonicNumber = $harmonicNumber + (1/$i); //calculating harmonic number
        }
        echo "Harmonic number :" . $harmonicNumber;
    }
    else{
        echo "Enter valid number";
    }
?>