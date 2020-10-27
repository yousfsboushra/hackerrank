<?php
function jimOrders($orders) {
    $result = array();
    $size = sizeof($orders);
    for($i=0;$i<$size;$i++){
        $result[$i+1] = $orders[$i][0] + $orders[$i][1];
    }
    asort($result);
    return array_keys($result);
}