<!DOCTYPE html>
<html>
    <head>
        <title>Tipi di elenchi non ordinati</title>
    </head>
    <body>
<?php
    $tipi = array("disc", "circle", "square");
    $lista = array("mele", "pere", "cioccolatini", "caff&egrave;", "datteri", "fagioli", "noci");
    
    foreach($tipi as $t) {
        echo "<h1>Lista non ordinata di tipo $t</h1>\n\n";
        echo '<ul type="' . $t . '">' . "\n";
        foreach($lista as $elemento) {
            echo "          <li>" . $elemento . "</li>\n";
        }
    echo "</ul>\n";    
    }

?>
    </body>
</html>