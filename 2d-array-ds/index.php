<?php
function hourglassSum($arr) {
    $maxSum = null;
    $rowsSize = sizeof($arr);
    if($rowsSize >= 3){
        for($rowIndex=1;$rowIndex<sizeof($arr);$rowIndex++){
            for($colIndex=1;$colIndex<sizeof($arr[$rowIndex]);$colIndex++){
                $sum = calculateHourglassSum($arr, $rowIndex, $colIndex);
                if($sum !== null && ($maxSum === null || $sum > $maxSum)){
                    $maxSum = $sum;
                }
            }
        }
    }else{
        $maxSum = 0;
    }
    return $maxSum;
}

function calculateHourglassSum($arr, $rowIndex, $colIndex){
    $sum = null;
    if(isset($arr[$rowIndex-1][$colIndex+1]) && isset($arr[$rowIndex+1][$colIndex+1])){
        $sum = $arr[$rowIndex][$colIndex];
        for($i=$colIndex-1;$i<=$colIndex+1;$i++){
            $sum += $arr[$rowIndex-1][$i];
            $sum += $arr[$rowIndex+1][$i];
        }
    }
    return $sum;
}