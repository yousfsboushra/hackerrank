<?php
function minimumAbsoluteDifference($arr) {
    sort($arr);
    $min = null;
    $size = sizeof($arr);
    for($j=1;$j<$size;$j++){
        $diff = $arr[$j] - $arr[$j-1];
        if($min === null || $diff < $min){
            $min = $diff;
        }
    }
    return $min;
}