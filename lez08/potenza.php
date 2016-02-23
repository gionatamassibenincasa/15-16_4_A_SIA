<?php
function potenza($base, $esponente)
{
    if ($base == 0) {
        return 0;
    }
    if($esponente == 0) {
        return 1;
    }
    if ($esponente < 0) {
        return 1 / potenza($base,
                -$esponente);
    }
    if ($esponente > 0) {
        return $base *
            potenza($base,
              $esponente-1);
    }
}
?>
<!DOCTYPE html>
<html>
   <head>
       <meta charset="UTF-8">
       <title>Potenze</title>
   </head>
   <body>
       <table border="1">
           <tr>
               <th>Operazione</th>
               <th>Risultato</th>
           </tr>
<?php
$basi = array(-10, -2, -1, 0,
                1,  2, 10);
$esponenti = array(-5, -1, 0,
                    1,  5);
                    
foreach($basi as $b) {
    foreach($esponenti as $e) {
?>
        <tr>
            <td>
<?php
    echo "$b<sup>$e</sup>";
?>
            </td>
            <td>
<?php
    echo potenza($b, $e);
?>
            </td>
        </tr>
<?php        
    }
}
?>
       </table>
   </body>
</html>