<?php
function simpleArraySum($ar) {
    /*
     * Write your code here.
     */
    $sum = 0;
    foreach($ar as $item){
        $sum += $item;
    }
    return $sum;
}