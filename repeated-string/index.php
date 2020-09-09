<?php
function repeatedString($s, $n) {
    $occurrenciesPerString = substr_count($s, "a");
    $occurrenciesPerExtraPartialString = 0;
    $stringLength = strlen($s);
    $extraPartialStringLength = $n % $stringLength;
    $numberOfFullStrings = ($n - $extraPartialStringLength) / $stringLength;
    if($extraPartialStringLength > 0){
        $occurrenciesPerExtraPartialString = substr_count(substr($s, 0, $extraPartialStringLength), "a");
    }
    return $numberOfFullStrings * $occurrenciesPerString + $occurrenciesPerExtraPartialString;
}