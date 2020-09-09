<?php
function minimumBribes($q) {
    $numberOfBribes = 0;
    $isTooChaotic = 0;
    $qSize = sizeof($q);
    $expecting = array();
    $served = array();
    for($i=0;$i<$qSize;$i++){
        for($k=$i+1;$k<$i+4;$k++){
            if(!isset($served[$k]) && !isset($expecting[$k])){
                $expecting[$k] = 0;
            }
        }

        $currentNumber = $q[$i];
        if(!isset($expecting[$currentNumber])){
            $isTooChaotic = 1;
            break;
        }else{
            foreach($expecting as $e => $v){
                if($e != $currentNumber){
                    $expecting[$e]++;
                }else{
                    break;
                }
            }

            $served[$currentNumber] = $expecting[$currentNumber];

            $numberOfBribes += $served[$currentNumber];
            
            unset($expecting[$currentNumber]);
        }
    }
    echo ($isTooChaotic? "Too chaotic" : $numberOfBribes) . "\n";
}