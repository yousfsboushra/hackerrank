<?php
function staircase($n) {
    for($i=0;$i<$n;$i++){
        print str_repeat(" ", $n-$i-1);
        print str_repeat("#", $i+1);
        print "\n";
    }
}