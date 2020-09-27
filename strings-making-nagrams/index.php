<?php
function makeAnagram($a, $b) {
    $aLength = strlen($a);
    $bLength = strlen($b);
    $count = 0;
    $aMap = array();
    $bMap = array();
    for($i=0;$i<$aLength;$i++){
        if(!isset($aMap[$a[$i]])){
            $aMap[$a[$i]] = 1;
        }else{
            $aMap[$a[$i]] += 1;
        }
    }

    for($i=0;$i<$bLength;$i++){
        if(isset($aMap[$b[$i]]) && $aMap[$b[$i]] > 0){
            $aMap[$b[$i]] -= 1;
            $aLength--;
        }else{
            $count++;
        }
    }
    $count += $aLength;
    return $count;
}