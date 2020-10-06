<?php
function kangaroo($x1, $v1, $x2, $v2) {
    $j = ($x2 - $x1) / ($v1 - $v2);
    if(is_integer($j) && $j >= 0){
        return "YES";
    }
    return "NO";
}