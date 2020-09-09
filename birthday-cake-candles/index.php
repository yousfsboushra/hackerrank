<?php
function birthdayCakeCandles($ar) {
    if(!empty($ar)){
        $max = max($ar);
        $counts = array_count_values($ar);
        return $counts[$max];
    }
}