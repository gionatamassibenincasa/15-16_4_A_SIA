<?php

$a_ascii = ord('a');
for ($i=0; $i<6; $i++) {
    $chiave = chr($a_ascii+$i);
    isset($_GET[$chiave]) || die("Il valore $chiave non &egrave presente");
    $$chiave = $_GET[$chiave];
}

function vincitore($s1, $s2) {
    return ($s1>$s2)?$s1:$s2;
}

$t1 = vincitore($a, $b);
$t2 = vincitore($c, $d);
$t3 = vincitore($e, $f);
$t4 = vincitore($t1, $t2);
$massimo = vincitore($t3, $t4);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ricerca del massimo fra 6 valori</title>
        <meta charset="UTF-8">
    </head>
    <body>
        Il massimo numero &egrave;: <?php echo $massimo; ?>.
    </body>
</html>