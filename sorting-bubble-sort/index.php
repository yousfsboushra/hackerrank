<?php
function countSwaps($a) {
    $n = sizeof($a);
    $swaps = 0;
    for($i=0;$i<$n;$i++){
        for($j=0;$j<$n-1;$j++){
            if($a[$j] > $a[$j+1]){
                $tmp = $a[$j];
                $a[$j] = $a[$j+1];
                $a[$j+1] = $tmp;
                $swaps++;
            }
        }
        
    }

    echo "Array is sorted in " . $swaps . " swaps." . PHP_EOL;
    echo "First Element: " . $a[0] . PHP_EOL;
    echo "Last Element: " . $a[$n-1] . PHP_EOL;
}