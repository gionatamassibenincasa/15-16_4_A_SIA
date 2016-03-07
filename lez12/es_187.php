<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Esercizio 187</title>
    </head>
<body>
<?php
isset ($_GET['num']) or die ("Numero non iviato");
$n = $_GET['num'];
for ($candidato = 2; $candidato < $n; $candidato++) {
    if ($n % $candidato == 0)
        $divisori[] = $candidato;
}
if (!isset ($divisori))
    echo "Il numero " . $n . " &egrave; primo.";
else {
    echo "Il numero " . $n . " &egrave; divisibile per ";
    for ($i = 0; $i < count($divisori); $i++)
        echo $divisori [$i] . " ";
}
?>
</body>    
</html>