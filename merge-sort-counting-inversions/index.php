<?php

function countInversions($arr) {
    $result = mergeSort($arr);
    return $result['swaps'];
}

function mergeSort($arr){
    $swaps = 0;
    $length = sizeof($arr);
    $sortedArr = array();
    
    if($length == 1){
        $sortedArr[] = $arr[0];
    }else if($length == 2){
        if($arr[0] > $arr[1]){
            $sortedArr[] = $arr[1];
            $sortedArr[] = $arr[0];
            $swaps++;
        }else{
            $sortedArr[] = $arr[0];
            $sortedArr[] = $arr[1];
        }
    }else{
        $index1 = $index2 = 0;
        $separator = intval($length / 2);
        $part1 = mergeSort(array_slice($arr, 0, $separator));
        $part2 = mergeSort(array_slice($arr, $separator));
        while($index1 < $separator && $index2 < $length - $separator){
            if(isset($part2['arr'][$index2]) && isset($part1['arr'][$index1])){
                if($part2['arr'][$index2] < $part1['arr'][$index1]){
                    $sortedArr[] = $part2['arr'][$index2];

                    $swaps += $separator - $index1;

                    $index2++;
                }else{
                    $sortedArr[] = $part1['arr'][$index1];
                    $index1++;
                }
            }else{
                break;
            }
        }

        for($i=$index1;$i<$separator;$i++){
            if(isset($part1['arr'][$i])){
                $sortedArr[] = $part1['arr'][$i];
            }
        }
        for($i=$index2;$i<$length - $separator;$i++){
            if(isset($part2['arr'][$i])){
                $sortedArr[] = $part2['arr'][$i];
            }
        }
        $swaps += $part1['swaps'];
        $swaps += $part2['swaps'];
    }
    
    return array(
        'arr' => $sortedArr,
        'swaps' => $swaps,
    );
}