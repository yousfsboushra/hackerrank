<?php
function balancedSums($arr) {
    $size = sizeof($arr);
    $left = 0;
    $right = 0;
    $leftIndex = 0;
    $rightIndex = $size - 1;
    while($rightIndex > $leftIndex){
        if($left < $right){
            $left += $arr[$leftIndex];
            $leftIndex++;
        }else{
            $right += $arr[$rightIndex];
            $rightIndex--;
        }
        if($left == $right){
            $left = 0;
            $right = 0;
        }
    }
    if($left == $right || $left == 0 || $right == 0){
        return "YES";
    }
    return "NO";
}
?>