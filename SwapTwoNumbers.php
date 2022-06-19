<?php
    function swapTwoNumbers(){
        //user input
        $num1 = readline("Enter num1 :");
        $num2 = readline("Enter num2 :");
         
        if($num1 >= PHP_INT_MIN and $num1 <= PHP_INT_MAX and $num2 >= PHP_INT_MIN and $num2 <= PHP_INT_MAX){ //input validation
            echo "Before swapping num1 =" . $num1 . " " . "num2 =" . $num2. "\n";
            //swapping numbers using another variable
            $temp = $num1;
            $num1 = $num2;
            $num2 = $temp;
            echo "After swapping num1 =" . $num1 . " " . "num2 =" . $num2;
        } 
        else{
            echo "Enter valid numbers";
        }
    }
    swapTwoNumbers();
?>