<?php
function sherlockAndAnagrams($s) {
    $total = 0;
    $map = array();
    $length = strlen($s);
    for($i=1;$i<$length;$i++){
        for($k=0;$k<$length;$k++){
            if($k + $i <= $length){
                $str = substr($s, $k, $i);
                if($i > 1){
                    $tmpArr = str_split($str);
                    sort($tmpArr);
                    $str = implode("", $tmpArr);
                }
                
                if(isset($map[$str])){
                    $map[$str]++;
                }else{
                    $map[$str] = 1;
                }
            }
        }
    }
    foreach($map as $count){   
        for($i=1;$i<$count;$i++){
            $total += $i;
        }
    }
    return $total;
}