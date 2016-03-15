<?php

//Connect to the database
$host = "127.0.0.1";
$user = "gionatamassibeni"; //Your Cloud 9 username
$pass = "";                 //Remember, there is NO password by default!
$db = "es_191";             //Your database name you want to connect to
$port = 3306;               //The port #. It is always 3306
    
$connection = mysqli_connect($host, $user, $pass, $db, $port)
    or die(mysql_error());

$query = "SELECT Scadenza FROM Abbonamenti WHERE Numero = " . 
    $_GET['numero'];
$table = mysqli_query($connection, $query);

while( $row = mysqli_fetch_assoc($table) ) {
    echo ($row['Scadenza']) . "\n";
}

mysqli_free_result($table);

mysqli_close($connection);

?>