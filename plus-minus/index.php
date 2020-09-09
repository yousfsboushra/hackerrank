<?php
function plusMinus($arr) {
    $plus = 0;
    $minus = 0;
    $zero = 0;
    $total = 0;
    foreach($arr as $item){
        $total++;
        if($item > 0){
            $plus++;
        }else if($item < 0){
            $minus++;
        }else{
            $zero++;
        }
    }
    print number_format($plus/$total, 6) . "\n";
    print number_format($minus/$total, 6) . "\n";
    print number_format($zero/$total, 6) . "\n";
}