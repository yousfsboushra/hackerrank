<?php
function miniMaxSum($arr) {
    $size = sizeof($arr);
    if(!empty($arr) && $size >= 4){
        sort($arr);
        $min = 0;
        $max = 0;
        for($i=0;$i<4;$i++){
            $min += $arr[$i];
            $max += $arr[$size - $i - 1];
        }
        print $min . ' ' . $max;
    }
}