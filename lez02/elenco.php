<!DOCTYPE html>
<html>
    <head>
        <title>Elenchi</title>
    </head>
    <body>
        <h1>Lista della spesa</h1>
        <ul>
<?php
    $lista = array("mele", "pere", "cioccolatini", "caff&egrave;");
    
    foreach($lista as $elemento) {
        echo "          <li>" . $elemento . "</li>\n";
    }
?>
        </ul>
    </body>
</html>