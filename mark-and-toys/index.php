<?php
function maximumToys($prices, $k) {
    sort($prices);
    $total = 0;
    $toys = 0;
    $length = sizeof($prices);
    for($i=0;$i<$length;$i++){
        if($total + $prices[$i] < $k){
            $total += $prices[$i];
            $toys++;
        }else{
            break;
        }
    }
    return $toys;
}