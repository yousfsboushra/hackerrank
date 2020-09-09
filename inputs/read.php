<?php

function getInputs($folder) {
    $inputs = array();
    $baseFolder = __DIR__ . "/" . $folder;
    $files = scandir($baseFolder);
    $filesSize = sizeof($files);
    for($i=0;$i<$filesSize;$i++){
        $fileName = $baseFolder . "/" . $files[$i];
        $inputIndex = str_replace(".txt", "", $files[$i]);
        if($files[$i] != "." && $files[$i] != ".." && file_exists($fileName)){
            $content = file_get_contents($fileName);
            $lines = explode(PHP_EOL, $content);
            $numberOfLines = sizeof($lines);
            for($k=0;$k<$numberOfLines;$k++){
                $inputs[$inputIndex][] = $lines[$k];
            }
        }
    }
    return $inputs;
}

?>