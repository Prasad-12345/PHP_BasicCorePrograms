<?php
      $charcter = readline("Enter alphabet :");
      //regex pattern to validate alphabet
      $pattern = "/[a-zA-Z]{1}/i";
      $check = preg_match($pattern, $charcter);
    
      if($check == 1){
        //conditon for vowel and consonant
        if($char == 'a' || $char == 'A' || $char == 'e' or $char == 'E' || 
            $char == 'i' || $char == 'I' || $char == 'o' || $char == 'O' ||
            $char == 'u' || $char == 'U'){
            echo $char . " " . "is vowel";
        }
        else{
            echo $char . " " . "is consonant";
        }  
    }
        else{
            echo "Enter valid charcter";
        }       
?>