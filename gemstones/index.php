<?php
function gemstones($arr) {
    $size = sizeof($arr);
    $map = array();
    $max = 0;
    $count = 0;
    for($i=0;$i<$size;$i++){
        $length = strlen($arr[$i]);
        for($j=0;$j<$length;$j++){
            if(isset($map[$arr[$i][$j]]) && $map[$arr[$i][$j]] == $max){
                $map[$arr[$i][$j]] += $length;
                if($i == $size - 1){
                    $count++;
                }
            }else if($i == 0){
                $map[$arr[$i][$j]] = $length;
            }
        }
        $max += $length;
    }
    return $count;
}