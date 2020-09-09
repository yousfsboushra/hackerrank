<?php
function timeConversion($s) {
    /*
     * Write your code here.
     */
    $pm = 0;
    if(strpos($s, "PM") !== false){
        $pm = 1;
        $s = str_ireplace("PM", "", $s);
    }else{
        $s = str_ireplace("AM", "", $s);
    }
    $arr = explode(":", $s);
    if($arr[0] == 12 && $pm == 0){
        $arr[0] = 0;
    }else if($arr[0] < 12 && $pm == 1){
        $arr[0] = intval($arr[0]) + 12;
    }
    if($arr[0] < 10){
        $arr[0] = '0' . intval($arr[0]);
    }
    return implode(":", $arr);
}
