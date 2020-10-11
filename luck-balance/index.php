<?php

function luckBalance($k, $contests) {
    $luck = 0;
    $size = sizeof($contests);
    $importantContests = array();
    for($i=0;$i<$size;$i++){
        if($contests[$i][1] === 1){
            $importantContests[] = $contests[$i][0];
        }else{
            $luck += $contests[$i][0];
        }
    }
    rsort($importantContests);
    $size = sizeof($importantContests);
    for($i=0;$i<$size;$i++){
        if($i < $k){
            $luck += $importantContests[$i];
        }else{
            $luck -= $importantContests[$i];
        }
    }
    return $luck;
}


/*function luckBalance($k, $contests) {
    $luck = 0;
    $size = sizeof($contests);
    if($size > 0){
        $nextContests = array();
        if($size > 1){
            $nextContests = array_slice($contests, 1);
        }
        $isImportant = $contests[0][1];
        if($isImportant === 1){
            $luck = luckBalance($k, $nextContests) - $contests[0][0];
            if($k > 0){
                $loseLuck = luckBalance($k-1, $nextContests) + $contests[0][0];
                if($loseLuck > $luck){
                    $luck = $loseLuck;
                }
            }
        }else{
            $luck = luckBalance($k, $nextContests) + $contests[0][0];
        }
    }else{
        return 0;
    }
    return $luck;
}*/