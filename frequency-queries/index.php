<?php
function freqQuery($queries) {
    $result = array();
    $length = sizeof($queries);
    $map = array();
    for($i=0;$i<$length;$i++){
        $val = $queries[$i][1];
        switch($queries[$i][0]){
            case 1:
                if(isset($map[$val])){
                    $map[$val]++;
                }else{
                    $map[$val] = 1;
                }
            break;
            case 2:
                if(isset($map[$val]) && $map[$val] > 0){
                    $map[$val]--;
                }
            break;
            case 3:
                $found = in_array($val, $map);
                $result[] = $found? '1' : '0';
            break;
        }
    }
    return $result;
}