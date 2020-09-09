<?php
function diagonalDifference($arr) {
    $ltr = 0;
    $rtl = 0;
    $len = sizeof($arr);
    for($i=0;$i<$len;$i++){
        $rtlIndex = $len - $i - 1;
        $ltr += (isset($arr[$i][$i]))? $arr[$i][$i] : 0;
        $rtl += (isset($arr[$i][$rtlIndex]))? $arr[$i][$rtlIndex] : 0;
    }
    $diff = $ltr - $rtl;
    if($diff < 0){
        $diff *= -1;
    }
    return $diff;
}