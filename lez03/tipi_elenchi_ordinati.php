<!DOCTYPE html>
<html>
    <head>
        <title>Tipi di elenchi ordinati</title>
    </head>
    <body>
<?php
    $tipi = array("1", "a", "A", "i", "I");
    $lista = array("mele", "pere", "cioccolatini", "caff&egrave;", "datteri", "fagioli", "noci");
    
    foreach($tipi as $t) {
        echo "<h1>Lista ordinata di tipo $t</h1>\n\n";
        echo '<ol type="' . $t . '">' . "\n";
        foreach($lista as $elemento) {
            echo "          <li>" . $elemento . "</li>\n";
        }
    echo "</ol>\n";    
    }

?>
    </body>
</html>