<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Es. 189 - Tabella pitagorica</title>
        <style type="text/css">
            td {
                border: 1px solid red;
                text-align: right; 
            }
            table { 
                border-spacing: 0;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th></th>
<?php
for ($j = 0; $j <= 10; $j++) {
    echo "<th>$j</th>";
}
?>
            </tr>
<?php
for ($i = 0; $i <= 10; $i++) {
    echo "<tr>";
    echo "<th>$i</th>";
    for ($j=0; $j <= 10; $j++) {
        echo "<td>" . $i * $j . "</td>";
    }
    echo "</tr>";
}
?>
        </table>
    </body>
</html>