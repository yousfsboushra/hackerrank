<?php
function twoStrings($s1, $s2) {
    $reply = "NO";
    $map = array();
    $length1 = strlen($s1);
    for($i=0;$i<$length1;$i++){
        $map[$s1[$i]] = 1;
    }

    $length2 = strlen($s2);
    for($i=0;$i<$length2;$i++){
        if(isset($map[$s2[$i]])){
            $reply = "YES";
            break;
        }
    }
    return $reply;

}