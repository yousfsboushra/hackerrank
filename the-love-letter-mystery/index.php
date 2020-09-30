<?php
function theLoveLetterMystery($s) {
    $count = 0;
    $length = strlen($s);
    for($i=0;$i<$length-$i;$i++){
        $diff = ord($s[$i]) - ord($s[$length-$i-1]);
        $count += ($diff < 0)? -1 * $diff : $diff;
    }
    return $count;
}