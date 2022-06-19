<?php
    $year = readline("Enter 4 digit number :"); //user input
    
    if($year >= 1000 && $year <= 9999){ //ensure four digit number
        if($year >= PHP_INT_MIN and $year <= PHP_INT_MAX){ //input validation
            //condition for loop year
            if (($year % 4 == 0) && ($year % 100 != 0) || $year % 400 == 0){
				echo $year . " " . "is leap year";
			}
            else{
                echo $year . " " . "is not leap year";
            }
        }
        else{
            echo "Enter valid number";
        }
    }
    else{
        echo "Enter 4 digit number";
    }

?>