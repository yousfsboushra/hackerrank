<?php
function funnyString($s) {
    $len = strlen($s);
    $arr = array();
    for($i=1;$i<$len;$i++){
        $diff = ord($s[$i]) - ord($s[$i-1]);
        $arr[] = $diff < 0? -1 * $diff : $diff;
    }
    $size=$len-1;
    for($i=0;$i<$size;$i++){
        if($arr[$i] != $arr[$size-$i-1]){
            return "Not Funny";
        }
    }
    return "Funny";
}