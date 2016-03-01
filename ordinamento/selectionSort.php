<?php

require_once('verifica_ord_r.php');

function selectionSort(&$a) {
    for($posElementoDaInserire = 0;
        $posElementoDaInserire < count($a) - 1;
        $posElementoDaInserire++)
    {
        echo "Inizio iterazione n. " . ($posElementoDaInserire+1) . "<br>\n";
        print_r($a);

        // Cerco la posizione dell'elemento minimo
        $pos_min = $posElementoDaInserire;
        for ($i = $pos_min + 1; $i < count($a); $i++)
            if ($a[$i] < $a[$pos_min])
                $pos_min = $i;
        /* $pos_min e' l'indice dell'elemento
           non ancora ordinato piu' piccolo */
           
        // Scambio
        $appoggio = $a[$posElementoDaInserire];
        $a[$posElementoDaInserire] = $a[$pos_min];
        $a[$pos_min] = $appoggio;
        
        echo "Fine iterazione n. " . ($posElementoDaInserire+1) . "<br>\n";
        print_r($a);

    }
}

$vettore = array(3,7,5,1,4);
stampaOrdinato($vettore);
print_r($vettore);
selectionSort($vettore);

stampaOrdinato($vettore);

?>
