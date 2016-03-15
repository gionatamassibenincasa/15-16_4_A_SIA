<!DOCTYPE html>
<html>

	<head>
		<title>Esercizio n. 1 - Intestazioni</title>
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
			<h1>Esercizio n. 1 - 2 punti</h1>
			
			<p>Si costruisca una pagina HTML contenente una form che richiede l'immissione di un numero compreso tra 1 e 6.</p>
			<div class="punteggio">1 punto.</div>
			
			<p>Si costruisca uno script PHP che accetta come parametro il numero <em>n</em> compreso tra 1 e 6 immesso nella form.
			   Lo script genera una pagina che presenta, per ogni numero naturale <em>i</em> da 1 ad <em>n</em> un'intestazione di livello <em>i</em> e un capoverso, come mostrato nell'esempio.</p>
			<div class="punteggio">1 punto.</div>
		
		
		</div>
		
		<div id="parte_statica">
			<h2>Pagina HTML (statica)</h2>
		
			<form method="GET">
				<div>Numero di livelli d'intestazione: <input id="n" type="number" min="1" max="6" name="n"></div>
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
		var n = getParameterByName('n');
		if (n) {
			document.getElementById('n').setAttribute("value", n);
		}
		</script>
		
		<div id="parte_dinamica">
			<h2>Pagina PHP (dinamica)</h2>

<?php
	function draw($n) {
		for ($i = 1; $i <= $n; $i++) {
			echo  "		<h$i style=\"text-align: left;\">Intestazione  di livello $i</h$i>\n";
			echo  "		<p>Capoverso numero $i.</p>\n\n";
		}
	}

	if (isset($_GET['n']))
		draw($_GET['n']);
	
?>
		</div>
	</body>
</html>
