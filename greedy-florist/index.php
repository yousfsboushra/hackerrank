<?php
function getMinimumCost($k, $c) {
    rsort($c);
    $size = sizeof($c);
    $cost = 0;
    $f = 0;
    for($i=0;$i<$size;$i++){
        if($i % $k === 0){
            $f++;
        }
        $cost += $f*$c[$i];
    }
    return $cost;
}