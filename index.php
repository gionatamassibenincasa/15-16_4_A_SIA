<?php
/**
 * Elenca i file PHP presenti nella directory lez??.
 * 
 * @file prototipo-ui.php
 * @author Gionata Massi <gionata.massi@savoiabenincasa.it>
 */
 
 
/**
 * Elenca i file PHP presenti nella directory corrente.
 * 
 * @return l'array contente le coppie (fileName, lastChange), dove
 *          fileName indica il nome del file e
 *          lastChange indica la data di ultima modifica
 */
function listPhpFiles() {
    // la directory da cui iniziare la scansione dei file
    $startDirectory = '.';
    $dirs = scandir($startDirectory);
    
    // filtraggio delle directory lez??
    foreach ($dirs as $dir) 
   { 
       if ($dir = "." || $dir == "..") {
           continue;
       }
   } 
    
    // filtraggio dei file PHP
    for ($i = 0; $i < count($files); $i++) {
        $extension = pathinfo($files[$i], PATHINFO_EXTENSION);
        if ($extension == 'php' || $extension == 'html') {
            $phpFile['fileName'] = $files[$i];
            $phpFile['lastChange'] = 
                    date('Y-m-d H:i:s',
                        filemtime($files[$i]));
            $phpFiles[] = $phpFile;
        }
    }
    
    return $phpFiles;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Prototipo dell'interfaccia utente</title>
        <meta charset="utf-8">
    </head>
    <body>
        <table style="border: 1px;" width="100%">
            <tr>
                <!-- Menù di scelta dei file PHP -->
                <td style="background-color: #CCCCCC; width: 20%; vertical-align:text-top;">
                    <nav id="workspace_files">
                        <ul>
<?php
    $phpFiles = listPhpFiles();
    foreach ($phpFiles as $f) {
        // Scrittura dei collegamenti
        echo "                          <li>";
        echo '<a href="' . $_SERVER['SCRIPT_NAME'] . '?fn=';
        echo $f['fileName'];
        echo '" title="' . $f['lastChange'  ];
        echo '">';
        echo $f['fileName'];
        echo "</a></li>\n";
    }
?>

                        </ul>
                    </nav>
                </td>
                
                <!-- Codice sorgente -->
                <td style="background-color: #CCCCFF; width: 40%; vertical-align:text-top;">
                    <div id="src_code" style="width: 40%">
<?php
    if (! is_null($_GET["fn"])) {
        $fileContent = file_get_contents($_GET["fn"]);
        // Scrittura del codice sorgente
        $highlightedContent = highlight_string($fileContent, true);
        echo $highlightedContent;
    }   
?>

                    </div>
                </td>
                
                <!-- Risultato della valutazione del codice -->
                <td style="background-color: #FFCCCC; width: 40%; vertical-align:text-top;">
                    <div id="output_code" style="width: 40%;">
<?php
    if (! is_null($_GET["fn"])) {
        if ($_GET["fn"] == basename($_SERVER['SCRIPT_NAME'])) {
            // avoid recursive evaluation
        } else {
            eval('?>' . $fileContent . '<?php');
        }
    }   
?>                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>
