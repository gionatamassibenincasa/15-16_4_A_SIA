<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Es. 193 - parte b - scelta conto corrente</title>
    </head>
    
    <body>
        <h1>Scelta conto corrente</h1>
        
        <form action="es_193_c.php" method="get">
            
<?php

isset($_GET['id_correntista']) or
    die('Deve essere indicato il correntista');

$host = "localhost";
$user = "gionatamassibeni";
$pass = "";
$db   = "es_193";
$port = 3306;

$conn = mysqli_connect($host,
            $user, $pass, $db, $port)
            or die(mysqli_error());
$query = "SELECT * FROM conto_corrente " .
         "WHERE id_correntista = " .
         $_GET['id_correntista'];
$table = mysqli_query($conn, $query)
    or die(mysqli_error());
while ($row = mysqli_fetch_assoc($table)) {
    echo '<div>';
    echo '<input type="radio" '.
         'name="cc" ' .
         'value="' . $row['numero'] .
         '"> ' . $row['numero'];
    echo '</div>';
}
mysqli_free_result($table);
mysqli_close($conn);
?>
        <div align="center">
            <input type="submit" value="Invia"/>
        </div>
        </form>
    </body>
</html>