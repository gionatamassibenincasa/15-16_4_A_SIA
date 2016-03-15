<!DOCTYPE html>
<html>

	<head>
		<title>Esercizio n. 3 - Elenchi</title>
		<meta charset="UTF-8">
		
		<style>
			#descrizione {
				display:inline-block;
				vertical-align:top;
				width: 100%;
				/* border: 1px solid red; */
			}
			
			#parte_statica {
				float: left;
				width: 49%;
				// border: 1px solid green;
			}
			
			#parte_dinamica {
				float: right;
				width: 49%;
				// border: 1px solid blue;
			}
			
			#parte_statica h2 {
				text-align: center;
			}
			
			#parte_dinamica h2 {
				text-align: center;
			}
			
			.punteggio {
				text-align: right;
				vertical-align: top;
			}

		</style>
	</head>

	<body>
	
		<div id="descrizione">
			<h1>Esercizio n. 3 - 4 punti</h1>
			
			<p>Si costruisca una pagina HTML contenente una form per la scelta tra elenchi <em>ordinati</em> e <em>non ordinati</em>.</p>
			<div class="punteggio">1 punto.</div>
			
			<p>Si costruisca uno script PHP che accetta come argomento il tipo di elenco (<em>ol</em> oppure <em>ul</em>) e genera tanti elenchi quanti sono i simboli
			utilizzabili per quel tipo di elenco.<br>
			Lo script varia l'attributo "<em>type</em>" per cambiare il simbolo iniziale.</p>
			
			<pre>
$elenco_spesa = array('albicocche', 'banane', 'ciliegie');
$sym_types = array(
	'ol' => array('1', 'A', 'I', 'a', 'i'),
	'ul' => array('circle', 'disk', 'square')
);	
			</pre>
			<div class="punteggio">3 punti.</div>
		
		
		</div>
		
		<div id="parte_statica">
			<h2>Pagina HTML (statica)</h2>
		
			<form method="GET">
				<div>Genera l'elenco 
					<input id="ol" type="radio" name="elenco" value="ol"> ordinato o
					<input id="ul" type="radio" name="elenco" value="ul"> non ordinato.
				</div>
				<div><input type="submit" value="Invia"></div>
			</form>
		</div>
		
		<script>
		function getParameterByName(name, url) {
			if (!url) url = window.location.href;
			name = name.replace(/[\[\]]/g, "\\$&");
			var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
				results = regex.exec(url);
			if (!results) return null;
			if (!results[2]) return '';
			return decodeURIComponent(results[2].replace(/\+/g, " "));
		}
		var tipo = getParameterByName('elenco');
		if (tipo) {
			document.getElementById(tipo).setAttribute("checked", "checked");
		}
		</script>
		
		<div id="parte_dinamica">
			<h2>Pagina PHP (dinamica)</h2>

<?php	
	function draw($tipo) {
		$elenco_spesa = array('albicocche', 'banane', 'ciliegie');
		$sym_types = array(
			'ol' => array('1', 'A', 'I', 'a', 'i'),
			'ul' => array('circle', 'disk', 'square')
		);
		
		foreach($sym_types[$tipo] as $t) {
			echo "<h3>Lista" . ($tipo == 'ul'?" non":"") . " ordinata di tipo $t</h3>\n\n";
			echo '<' . $tipo . ' type="' . $t . '">' . "\n";
			foreach($elenco_spesa as $elemento) {
				echo "          <li>" . $elemento . "</li>\n";
			}
			echo "</$tipo>\n\n";
		}
	}

	if (isset($_GET['elenco']))
		draw($_GET['elenco']);
	
?>
		</div>
	</body>
</html>
