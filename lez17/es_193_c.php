<?php
isset($_GET['cc']) or die('Conto corrente richiesto');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Es. 193 - parte c - movimento</title>
    </head>
    
    <body>
        <h1>Movimento</h1>
        
        <form action="es_193_d.php" method="get">
            
            <div>tipo di operazione:
            <input type="radio" name="tipo" 
            value="prelievo"> prelievo
            <input type="radio" name="tipo" 
            value="versamento"> versamento
            </div>
            <div>importo:
            <input type="number" min="0" 
            required name="importo">
            </div>
            <div>
                <input type="hidden" name="cc"
                    value="<?php echo $_GET['cc']; ?>">
            </div>
    
            <div align="center">
                <input type="submit" value="Invia"/>
            </div>
        </form>
    </body>
</html>