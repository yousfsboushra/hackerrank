<?php
function sockMerchant($n, $ar) {
    $matchingCounter = 0;
    $matchingPairs = array();
    foreach($ar as $color){
        if(isset($matchingPairs[$color])){
            unset($matchingPairs[$color]);
            $matchingCounter++;
        }else{
            $matchingPairs[$color] = '';
        }
    }
    return $matchingCounter;
}