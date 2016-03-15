<!DOCTYPE html>
<html>

	<head>
		<title>Esercizio n. 4 - Scacchiera</title>
		<meta charset="UTF-8">
		
		<style>
			table {
				table-layout: fixed;
				border-collapse: collapse;
			}
			
			td {
				width: 30px;
				height: 30px;
				border: 1px solid black;
				margin: 0px;
			}
			
			th {
				padding: 5px;
			}
			
			.nero {
				color: white;
				background-color: black;
			}
			
			.bianco {
				color: black;
				background-color: white;
			}

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
			<h1>Esercizio 4 - 5 punti</h1>
			
			<p>Si costruisca una pagina HTML contenente una form che richiede l'immissione di un numero compreso tra 1 e 8.</p>
			<div class="punteggio">1 punti.</div>
			
			<p>Si costruisca un script PHP che accetta come parametro il numero <em>n</em> compreso tra 1 e 8 e crea una scacchiera.
			Il lato della scacchiera ha tanti elementi quanto il numero <em>n</em> ricevuto in ingresso. La scacchiera presenta sulla sinistra, il numero di riga, che vale uno
			nella riga pi&ugrave; in basso. Sotto l'ultima riga sono indicate le colonne, usando i simboli alfabetici a partire dalla <em>a</em>.</p>
			<div class="punteggio">4 punti.</div>
		
		
		</div>
		
		<div id="parte_statica">
			<h2>Pagina HTML (statica)</h2>
		
			<form method="GET">
				<div>Numero di caselle presenti sul lato della scacchiera: <input id="n" type="number" min="1" max="8" name="n"></div>
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
	function draw_table($n) {
		echo "			<table>\n";
		for ($i = 0; $i < $n; $i++) {
			echo  "<tr>\n<th>" . ($n - $i) . "</th>\n";
			for ($j = 0; $j < $n; $j++) {
				if (($i + $j) % 2 == 1) {
					echo "<td class=\"nero\"><br></td>\n";
				} else {
					echo "<td class=\"bianco\"><br></td>\n";
				}
			}
			echo "</tr>";
		}
		echo "<tr><th></th>\n";
		for ($j = 0; $j < $n; $j++) {
			echo "<th>" . chr(ord('a') + $j) . "</th>\n";
		}
		echo "</tr>\n";
		
		echo "		</table>\n";
	}

	if (isset($_GET['n']))
		draw_table($_GET['n']);
	
?>
		</div>
	</body>
</html>
