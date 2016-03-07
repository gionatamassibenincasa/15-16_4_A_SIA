<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Es. 185 - parte dinamica</title>
    </head>
    <body>
<?php
isset($_GET['nome']) or die("Nome non presente");
if ($_GET['sesso']=='M')
    echo "Egr. Sig. ";
else
    echo "Gent.ma Sig.ra ";
echo $_GET['nome'];
    
?>
    </body>
</html>