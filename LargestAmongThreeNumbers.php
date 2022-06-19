<?php
    // $num1 = 14;
    // $num2 = 15;
    // $num3 = 20;
    //input numbers
    $num1 = readline("Enter num1 :"); 
    $num2 = readline("Enter num2 :");
    $num3 = readline("Enter num3 :");
    
    if($num1 >= PHP_INT_MIN and $num1 <= PHP_INT_MAX and $num2 >= PHP_INT_MIN and $num2 <= PHP_INT_MAX and
                    $num3 >= PHP_INT_MIN and $num3 <= PHP_INT_MAX){ //input validation

        //comparing numbers using operators
        if($num1 == $num2 || $num1 == $num3 || $num2 == $num3){
            echo "You entered equal numbers";
        }
        elseif($num1 > $num2 && $num1 > $num3){
             echo "$num1 is greater";
        } 
        elseif($num2 > $num1 && $num2 > $num3){
            echo "$num2 is greater";
        }
        
        else{
            echo "$num3 is greater";
        }
    }
    else{
        echo "Enter valid number";
    }  
?>