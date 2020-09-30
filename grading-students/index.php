<?php
function gradingStudents($grades) {
    $length = sizeof($grades);
    for($i=0;$i<$length;$i++){
        if($grades[$i] > 37 && $grades[$i] % 5 > 2){
            $grades[$i] += 5 - $grades[$i] % 5;
        }
    }
    return $grades;
}