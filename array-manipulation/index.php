<?php
require("../inputs/read.php");

function arrayManipulation($n, $queries) {
    $max = 0;
    $size = sizeof($queries);

    $map = array();
    
    for($q=0;$q<$size;$q++){
        $start = $queries[$q][0];
        $end = $queries[$q][1];
        $value = $queries[$q][2];
        if(!isset($map[$start])){
            $map[$start] = $value;
        }else{
            $map[$start] += $value;
        }
        if(!isset($map[$end+1])){
            $map[$end+1] = -1 * $value;
        }else{
            $map[$end+1] -= $value;
        }
    }
    
    $tmp = 0;
    for($i=1;$i<=$n;$i++){
        if(isset($map[$i])){
            $tmp += $map[$i];
            if($tmp > $max){
                $max = $tmp;
            }
        }
    }
    return $max;
}

$inputs = getInputs("array-manipulation");
$testCases = getTestCases($inputs);
$testCasesSize = sizeof($testCases);
for($i=0;$i<$testCasesSize;$i++){
    $testCase = $testCases[$i];
    $output = arrayManipulation($testCase['n'], $testCase['queries']);
    if($output == $testCase['output']){
        print $i . ' => Success<br />';
    }else{
        print $i . ' => Fail<br />';
    }
    print 'Expected: ' . $testCase['output'] . '<br />';
    print 'Output: ' . $output . '<br />';
    print '<br />';
}

function getTestCases($inputs){
    $testCases = array();
    $size = sizeof($inputs);
    for($i=0;$i<$size;$i++){
        $lines = $inputs[$i];
        $linesSize = sizeof($lines);
        $tmp = explode(' ', $lines[0]);
        $n = intval($tmp[0]);
        $m = intval($tmp[1]);
        $output = intval($tmp[2]);
        $queries = array();
        for($k=1;$k<=$m;$k++){
            $queries[] = explode(' ', $lines[$k]);
        }
        $testCases[] = array(
            'n' => $n,
            'queries' => $queries,
            'output' => $output
        );
    }
    return $testCases;
}