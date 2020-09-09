<?php
function checkMagazine($magazine, $note) {
    $return = "No";
    $noteMap = array();
    $noteSize = sizeof($note);
    for($i=0;$i<$noteSize;$i++){
        if(isset($noteMap[$note[$i]])){
            $noteMap[$note[$i]]++;
        }else{
            $noteMap[$note[$i]] = 1;
        }
    }

    $magazineSize = sizeof($magazine);
    for($i=0;$i<$magazineSize;$i++){
        $word = $magazine[$i];
        if(isset($noteMap[$word])){
            $noteMap[$word]--;
            if($noteMap[$word] == 0){
                unset($noteMap[$word]);
            }
            $noteSize--;
        }
        if($noteSize == 0){
            $return = "Yes";
            break;
        }
    }
    echo $return;
}