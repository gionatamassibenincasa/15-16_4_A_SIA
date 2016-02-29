<?php

require_once('verifica_ord_r.php');

function insertionSort(&$a) {
    for($posElementoDaInserire = 1;
        $posElementoDaInserire < count($a);
        $posElementoDaInserire++)
    {
        echo "Inizio iterazione n. $posElementoDaInserire<br>\n";
        print_r($a);

        if ($a[$posElementoDaInserire] >=
            $a[$posElementoDaInserire - 1])
                continue;
        $elementoDaInserire = $a[$posElementoDaInserire];
        $i = $posElementoDaInserire - 1;
        while ($i >= 0 && $a[$i] > $elementoDaInserire) {
            $a[$i+1] = $a[$i];
            $i--;
        }
        $a[$i+1] = $elementoDaInserire;
    }
}

$vettore = array(3,7,5,1,4);
stampaOrdinato($vettore);
print_r($vettore);
insertionSort($vettore);

stampaOrdinato($vettore);

?>
