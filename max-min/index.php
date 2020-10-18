<?php
function maxMin($k, $arr) {
    sort($arr);
    $size = sizeof($arr);
    $minUnfairness = $arr[$k-1] - $arr[0];
    for($i=1;$i<=$size-$k;$i++){
        $unfairness = $arr[$k+$i-1] - $arr[$i];
        if($unfairness < $minUnfairness){
            $minUnfairness = $unfairness;
        }
    }
    return $minUnfairness;
}