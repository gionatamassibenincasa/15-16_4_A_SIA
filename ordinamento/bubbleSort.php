<?php

require_once('verifica_ord_r.php');

function bubbleSort(&$a) {
    for($posElementoDaInserire = count($a)-2;
        $posElementoDaInserire >= 0;
        $posElementoDaInserire--)
    {
        echo "Inizio iterazione n. " . (count($a) - $posElementoDaInserire - 1) . "<br>\n";
        print_r($a);
        
        for($i = 0; $i <= $posElementoDaInserire; $i++) {
            if ($a[$i] > $a[$i+1]) {
                // Scambio
                $appoggio = $a[$i];
                $a[$i] = $a[$i+1];
                $a[$i+1] = $appoggio;
            }
        }
        
        echo "Fine iterazione n. " . (count($a) - $posElementoDaInserire - 1) . "<br>\n";
        print_r($a);

    }
}

$vettore = array(3,7,5,1,4);
stampaOrdinato($vettore);
print_r($vettore);
bubbleSort($vettore);

stampaOrdinato($vettore);

?>
