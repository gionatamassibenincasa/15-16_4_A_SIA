<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>es_192</title>
    </head>
    <body>
        <h1>abbonamenti scaduti</h1>
        <table style="border: 1px solid black;">
            <tr>
                <th>numero</th>
                <th>nome</th>
                <th>cognome</th>
                <th>scadenza</th>
            </tr>
<?php
    $host="localhost";
    $username="gionatamassibeni";
    $password="";
    $db="es_192";
    $port=3306;
    
    $conn=mysqli_connect($host,$username,$password,$db,$port)
        or die(mysqli_error());
    $query="SELECT * FROM abbonato WHERE scadenza < CURDATE()";
    $table=mysqli_query($conn,$query) or die('Query non corretta');
    while($row=mysqli_fetch_assoc($table)){
        echo "<tr>";
        echo "  <td>" . $row['numero'] . "</td>";
        echo "  <td>" . $row['nome'] . "</td>";
        echo "  <td>" . $row['cognome'] . "</td>";
        echo "  <td>" . $row['scadenza'] . "</td>";
        echo "</tr>";
    }
    
    mysqli_free_result($table);
    mysqli_close($conn);
    
?>
        </table>
    </body>
</html>