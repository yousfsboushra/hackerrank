<?php
function alternatingCharacters($s) {
    $length = strlen($s);
    $count = 0;
    $lastChar = '';
    for($i=0;$i<$length;$i++){
        if($s[$i] == $lastChar){
            $count++;
        }else{
            $lastChar = $s[$i];
        }
    }
    return $count;
}