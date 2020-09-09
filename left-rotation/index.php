<?php
function rotLeft($a, $d) {
    $size = sizeof($a);
    if($d < $size){
        $arr1 = array_slice($a, 0, $d);
        $arr2 = array_slice($a, $d);
        $a = array_merge($arr2, $arr1);
    }
    return $a;
}