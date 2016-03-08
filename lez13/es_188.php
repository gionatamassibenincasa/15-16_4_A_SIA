<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Es. 188</title>
    </head>    
    <body>
<?php
(isset($_GET['nome']) and isset($_GET['datadinascita'])) or
    die('Parametri mancanti');
    
$giorno_corrente = date("m-d");
$compleanno = substr($_GET['datadinascita'], 5);

if ($giorno_corrente == $compleanno) {
    echo "Buon compleanno ";
} else {
    echo "Buongiorno ";
}
echo $_GET['nome'];

?>
    </body>
</html>