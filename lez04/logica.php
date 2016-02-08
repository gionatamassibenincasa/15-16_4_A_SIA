<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Logica della pagina di login</title>
    </head>
    <body>
        <h1>Benvenuto</h1>
        
        <p>Ciao <?php echo $_GET['username']; ?>.</p>
        
        <p>La tua password &egrave;: <?php echo $_GET['password']; ?>.</p>
    </body>
</html>