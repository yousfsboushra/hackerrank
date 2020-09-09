<?php
function compareTriplets($a, $b) {
    $len = (sizeof($a) > sizeof($b))? sizeof($a) : sizeof($b);
    $aScore = 0;
    $bScore = 0;
    for($i=0;$i<$len;$i++){
        if(!isset($a[$i])){
            $a[$i] = 0;
        }
        if(!isset($b[$i])){
            $b[$i] = 0;
        }
        if($a[$i] > $b[$i]){
            $aScore++;
        }else if($a[$i] < $b[$i]){
            $bScore++;
        }
    }
    return array($aScore, $bScore);
}