<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Es. 193 - parte d - Operazione e saldo</title>
    </head>
    
    <body>
        <h1>Operazione e saldo</h1>
        
<?php

isset($_GET['cc']) or
    die('Numero di conto corrente non indicato');

function rollback($conn) {
        echo mysqli_error($conn);
        mysqli_query($conn, "ROLLBACK");
        die(mysqli_error($conn));
}

$host = 'localhost';
$user = 'gionatamassibeni';
$pass = '';
$db   = 'es_193';
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
$query = "SELECT MAX(numero) AS n " .
         "FROM movimento";
$table = mysqli_query($conn, $query)
    or die(mysqli_error());
$row = mysqli_fetch_assoc($table);
if (!isset($row))
    $n = 1;
else 
    $n = $row['n'] + 1;
mysqli_free_result($table);

// Inserisce i dati del movimento
$query = "INSERT INTO movimento (" .
         "numero, cc, tipo, importo) " .
         "VALUES (" .
         $n . ", " . 
         $_GET['cc'] . ", " . 
         "'". $_GET['tipo'] . "', " . 
         $_GET['importo'] . ")";
mysqli_query($conn, $query)
    or rollback($conn);

// Aggiorna il saldo
$query = "UPDATE conto_corrente " . 
         "SET saldo = saldo " . 
         (($_GET['tipo'] == 'prelievo')?'- ':'+ ') . 
         $_GET['importo'] . " " .
         "WHERE numero = " . 
         $_GET['cc'];
mysqli_query($conn, $query)
    or rollback($conn);

// Termina positivamente la transazione
$query = "COMMIT";
mysqli_query($conn, $query)
    or die(mysqli_error());


echo "<p>Situazione conto n.: " . $_GET['cc'] . "</p>\n";
$query = "SELECT cognome, nome FROM " .
         "correntista, conto_corrente WHERE " . 
         "numero = " . $_GET['cc'] . " AND " . 
         "correntista.id_correntista = conto_corrente.id_correntista";
$table = mysqli_query($conn, $query)
        or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($table);
         
echo "<p>Intestatario: " . $row['cognome'] . " " . $row['nome'] . "</p>\n";
mysqli_free_result($table);

// Mostra il nuovo saldo
$query = "SELECT saldo FROM " .
         "conto_corrente WHERE " . 
         "numero = " . $_GET['cc'];
$table = mysqli_query($conn, $query)
        or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($table);
echo "<p>Saldo contabile: " . $row['saldo'] . "</p>\n";
mysqli_free_result($table);

echo "<h2>Lista dei movimenti</h2>\n";
$query = "SELECT data, importo, tipo FROM " .
         "movimento WHERE " . 
         "cc = " . $_GET['cc'];
$table = mysqli_query($conn, $query)
        or die(mysqli_error($conn));
echo '<table style="border: 1px solid black">' . "\n";
echo "\t<tr>\n\t\t<th>Data</th><th>Addebito</th><th>Accredito</th>\n\t</tr>\n";
while ($row=mysqli_fetch_assoc($table)) {
    echo "\t<tr>\n\t\t<td>" . $row['data'] . "</td>";
    if ($row['tipo'] == 'prelievo')
        echo "<td>" . $row['importo'] . "</td><td></td>\n\t</tr>";
    else
        echo "<td></td><td>" . $row['importo'] . "</td>\n\t</tr>";
}
echo "</table>\n";
mysqli_free_result($table);
mysqli_close($conn);
?>


    </body>
</html>