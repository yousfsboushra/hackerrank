<?php
function getTotalX($a, $b) {
    // Write your code here
    $start = max($a);
    $end = min($b);
    $aSize = sizeof($a);
    $bSize = sizeof($b);
    $count = 0;
    for($i=$start;$i<=$end;$i+=$start){
        $isOk = 1;
        for($k=0;$k<$aSize;$k++){
            if($i%$a[$k] !== 0){
                $isOk = 0;
                break;
            }
        }
        if($isOk === 0){
            continue;
        }
        for($k=0;$k<$bSize;$k++){
            if($b[$k]%$i !== 0){
                $isOk = 0;
                break;
            }
        }
        if($isOk === 1){
            $count++;
        }
    }
    return $count;
}