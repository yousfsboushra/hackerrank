<?php
function jumpingOnClouds($c) {
    $path = 0;
    if(isset($c[2]) && $c[2] == 0){
        $path = 1;
        $nextPath = jumpingOnClouds(array_slice($c, 2));
        if($nextPath){
            $path += $nextPath;
        }
    }else if(isset($c[1]) && $c[1] == 0){
        $path = 1;
        $nextPath = jumpingOnClouds(array_slice($c, 1));
        if($nextPath){
            $path += $nextPath;
        }
    }
    return $path;
}