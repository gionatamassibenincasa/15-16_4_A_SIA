<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Es. 193 - parte d - Operazione e saldo</title>
    </head>
    
    <body>
        <h1>Operazione e saldo</h1>
        
<?php

function rollback($conn) {
        mysqli_query($conn, "ROLLBACK");
        die(mysqli_error());
}
$host = "localhost";
$user = "gionatamassibeni";
$pass = "";
$db   = "es_193";
$port = 3306;

$conn = mysqli_connect($host,
            $user, $pass, $db, $port)
            or die(mysqli_error());

// Inizia la transazione
$query = "BEGIN";
mysqli_query($conn, $query)
    or die(mysqli_error());
    
// Interroga per conoscere il numero
// dell'ultimo movimento
$query = "SELECT max(numero) AS n " .
         "FROM movimento";
$table = mysqli_query($conn, $query)
    or die(mysqli_error());
$row = mysqli_fetch_assoc($table);
if (!isset($row))
    $n = 1;
else 
    $n = $row['n'] + 1;

// Inserisce i dati del movimento
$query = "INSERT INTO movimento (" .
         "numero, cc, tipo, importo) " .
         "VALUES (" .
         $n . ", " . 
         $_GET['cc'] . ", " . 
         $_GET['tipo'] . ", " . 
         $_GET['importo'] . ")";
mysqli_query($conn, $query)
    or rollback($conn);

// Aggiorna il saldo
$query = "UPDATE conto_corrente " . 
         "SET saldo = saldo " . 
         ($_GET['tipo'] == 'prelievo')?'- ':'+ ' . 
         $_GET['importo'];
mysqli_query($conn, $query)
    or rollback($conn);

// Termina positivamente la transazione
$query = "COMMIT";
mysqli_query($conn, $query)
    or die(mysqli_error());

// Mostra il nuovo saldo
$query = "SELECT saldo FROM " .
         "conto_corrente WHERE " . 
         "numero = " . $_GET['cc'];
$table = mysqli_query(£conn, $query)
        or die(mysqli_error());
$row = mysqli_fetch_assoc($table);
echo $row['saldo'];
?>


    </body>
</html>