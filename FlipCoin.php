<?php
    $num = readline("Enter number of times to flip coin :"); //user input
    $headCount = 0;
    $tailCount = 0;
    
    if($num >= PHP_INT_MIN and $num <= PHP_INT_MAX){  //input validation

        for($i = 1; $i<= $num; $i++){ 
            $count = rand(0,10)/10; //generating random numbers
            if($count < 0.5){
                $tailCount = $tailCount + 1;
            }
            else{
                $headCount = $headCount + 1;
            }
        }     
        //calculating percentage of head and tail
        echo "Percentage of head is :" . ($headCount*100)/$num . "\n";
        echo "Percentage of tail is :" . ($tailCount*100)/$num;
    }
    else{
        echo "Enter valid number";
    }    
?>