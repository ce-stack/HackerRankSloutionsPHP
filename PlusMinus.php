<?php

// Complete the plusMinus function below.
function plusMinus($arr) {
    //Get total index in array
   $totalCount =  count($arr);
   //Initialize values to zero "score"
   $pos = 0;
   $neg = 0;
   $zero = 0;

    /*
      Loop through the array of mixed numbers
      Check each index and value match against zero
      Increment pos, neg, zero based of zero comparison
    */
   for($i = 0; $i < $totalCount; $i++){
       if($arr[$i] > 0){
           $pos++;
       }elseif($arr[$i] < 0){
           $neg++;
       }else{
           $zero++;
       }
   }

    //Preformat numbers to decimals
   $prepos = floatval($pos/$totalCount);
   $preneg = floatval($neg/$totalCount);
   $prezero =  floatval($zero/$totalCount);
                             
    //Format decimals to 6 places using PHP's number_format function
   $pos = number_format($prepos, 6, '.', '');
   $neg = number_format($preneg, 6, '.', '');
   $zero = number_format($prezero, 6, '.', '');

   //Print each decimal on it's own line per instructions
   print($pos . "\n" . $neg . "\n" . $zero);

}