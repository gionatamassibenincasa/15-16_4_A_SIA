<?php

/**
 * pari e' una funzione che dato un numero intero
 * produce una stringa tra "pari" e "dispari".
 * 
 * @param n e' un numero intero
 * 
 * @return "pari" se il numero n e' pari, "dispari"
 *          altrimenti
 */
 function pari($n) {
     if ($n % 2 == 0) {
         return "pari";
     } else {
         return "dispari";
     }
 }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Numeri pari e dispari</title>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Numero</th>
                <th>Pari?</th>
            </tr>
            <!--
            <tr>
                <td></td>
            </tr>
            -->
<?php
    for($i=0; $i<10; $i++) {
        echo "<tr>\n";
        echo "  <td>$i</td>\n";
        echo "  <td>" . pari($i) . "</td>\n";
        echo "</tr>\n";
    }
?>
        </table>
    </body>
    
</html>
