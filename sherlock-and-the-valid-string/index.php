<?php
function isValid($s) {
    $length = strlen($s);
    $map = array();
    for($i=0;$i<$length;$i++){
        if(isset($map[$s[$i]])){
            $map[$s[$i]]++;
        }else{
            $map[$s[$i]] = 1;
        }
    }
    
    $countsMap = array();
    foreach($map as $count){
        if(isset($countsMap[$count])){
            $countsMap[$count]++;
        }else{
            $countsMap[$count] = 1;
        }
    }

    $size = sizeof($countsMap);
    if($size == 1){
        return "YES";
    }else if($size == 2){
        if(isset($countsMap[1]) && $countsMap[1] == 1){
            return "YES";
        }
        $keys = array_keys($countsMap);
        $keysDiff = $keys[0] - $keys[1];
        if($keysDiff == 1){
            if($countsMap[$keys[0]] == 1){
                return "YES";
            }
        }else if($keysDiff == -1){
            if($countsMap[$keys[1]] == 1){
                return "YES";
            }
        }
    }
    return "NO";
}