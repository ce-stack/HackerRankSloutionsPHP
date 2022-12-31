<?php

function lonelyinteger($a) {
    // Write your code here
   $uniArr = array_unique($a);
   $sumUniArr = array_sum($uniArr); 
   
   $lonelyInt =  ($sumUniArr * 2) -array_sum($a);

    return  print_r($lonelyInt);

}

lonelyinteger([1]);