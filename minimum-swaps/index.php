<?php
function minimumSwaps($arr) {
    $swaps = 0;
    $notSorted = array();
    foreach($arr as $i => $v){
        if($v != $i+1){
            $toSort = $v;
            if(isset($notSorted[$toSort])){
                while(isset($notSorted[$toSort])){
                    $toDelete = $toSort;
                    $toSort = $notSorted[$toSort];
                    unset($notSorted[$toDelete]);
                    $swaps++;
                    if($toSort != $i+1){
                        $notSorted[$i+1] = $toSort;
                    }else{
                        unset($notSorted[$toSort]);
                    }
                }
            }
            $notSorted[$i+1] = $toSort;
        }
    }
    return $swaps;
}