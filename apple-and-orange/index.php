<?php
function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    $count = 0;
    $applesLength = sizeof($apples);
    for($i=0;$i<$applesLength;$i++){
        $applePos = $apples[$i] + $a;
        if($applePos >= $s && $applePos <= $t){
            $count++;
        }
    }
    echo $count . PHP_EOL;
    $count = 0;
    $orangesLength = sizeof($oranges);
    for($i=0;$i<$orangesLength;$i++){
        $orangePos = $oranges[$i] + $b;
        if($orangePos >= $s && $orangePos <= $t){
            $count++;
        }
    }
    echo $count . PHP_EOL;
}