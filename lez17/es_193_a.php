<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Es. 193 - parte a - scelta correntista</title>
    </head>
    
    <body>
        <h1>Scelta correntista</h1>
        
        <form action="es_193_b.php" method="get">
            
<?php
$host = "localhost";
$user = "gionatamassibeni";
$pass = "";
$db   = "es_193";
$port = 3306;

$conn = mysqli_connect($host,
            $user, $pass, $db, $port)
            or die(mysqli_error());
$query = "SELECT * FROM correntista";
$table = mysqli_query($conn, $query)
    or die(mysqli_error());
while ($row = mysqli_fetch_assoc($table)) {
    echo '<div>';
    echo '<input type="radio" '.
         'name="id_correntista" ' .
         'value="' . $row['id_correntista'] .
         '"> ' . $row['nome'] . ' ' .
         $row['cognome'];
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