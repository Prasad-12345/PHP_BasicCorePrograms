<?php
    function isEvenOrOdd(){
        $num = readline("Enter number :"); //user input
        
        if(PHP_INT_MIN <= $num and PHP_INT_MAX >= $num){  //input validation
            //condition for even and odd number
            if($num % 2 == 0){
                echo $num . " " . "is even";
            }
            else{
                echo $num . " " . "is odd";
            }
        } 
        else{
            echo "Enter valid number";
        }
    }
    //isEvenOrOdd(4);
    isEvenOrOdd();
?>