<?php
function DiagonalDifference($arr) {
    // Write your code here
   $sumlr = 0;
   $sumrl = 0;
   $length = count($arr);
   for($i=0; $i < $length; $i++) {
   	$sumlr += $arr[$i][0+ $i];
   	$sumrl += $arr[$i][$length - $i - 1];
   }
    return print_r(abs( $sumlr - $sumrl));
}

$arr = [
[11,2,4],
    [4,5,6],
    [10,8,-12]
	
	];
DiagonalDifference($arr);