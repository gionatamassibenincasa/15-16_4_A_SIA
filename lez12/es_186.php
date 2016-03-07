<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>esercizio 186</title>
    </head>
    <body>
<?php
isset($_GET['num_mese']) or die('mese non passato');
$mesi=array('gen','feb','mar','apr','mag','giu',
            'lug','ago','set','ott','nov','dic');
if ($_GET['num_mese']>0&&$_GET['num_mese']<13){
    echo $mesi[$_GET['num_mese']-1];
} else {
    die("Mese non valido: " . $_GET['num_mese']);
}
?>
</body>
    
    
</html>