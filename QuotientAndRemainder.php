<?php
    // function computeQuotientAndRemainder($divisor, $dividend){
    //     echo "Quotient is" . $quotient = $dividend/$divisor . " ";
    //     echo "Remainder is" . $remainder = $dividend%$divisor;
    // }
    // computeQuotientAndRemainder(2, 4);

    function computeQuotientAndRemainder(){
        $divisor = readline("Enter divisor :");
        $dividend = readline("Enter dividend :");
        if($divisor >= PHP_INT_MIN and $divisor <= PHP_INT_MAX and $dividend >= PHP_INT_MIN and $dividend <= PHP_INT_MAX){
                //formula for quotient and remainder
                echo "Quotient is" . " " . $quotient = $dividend/$divisor . "\n ";
                echo "Remainder is" . " " . $remainder = $dividend%$divisor;
        } 
        else{
            echo "Enter valid number";
        }   
    }
    computeQuotientAndRemainder();
?>