<?php

function isSortedR($a) {
    if(count($a) <= 1)
        return true;
    $first = array_shift($a);
    if ($first > $a[0])
        return false;
    else
        return isSortedR($a);
}

function stampaOrdinato($v) {
    echo "Vettore " . 
        (isSortedR($v)?" ":"non ") .
        "ordinato<br>\n";
}

?>