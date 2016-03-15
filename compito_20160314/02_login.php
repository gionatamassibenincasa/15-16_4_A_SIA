<!DOCTYPE html>
<html>

	<head>
		<title>Esercizio n. 2 - Login</title>
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
			<h1>Esercizio n. 2 - 3 punti</h1>
			
			<p>Si costruisca una pagina HTML contenente una form per l'immissione di <em>username</em> e <em>password</em>.</p>
			<div class="punteggio">1 punto.</div>
			
			<p>Si costruisca uno script PHP che riceve con il metodo POST la <em>username</em> e la <em>password</em>.
			A seguito del confronto delle credenziali con i dati dell'array <em>utenti</em> sotto indicato viene pubblicato un diverso capoverso.
			Se l'utente esiste e la password &egrave; corretta, allora viene scritto "Accesso consentito.", altrimenti "Accesso negato.".</p>
			
			<pre>
$utenti = array(
	'pippo' => 'secret',
	'paperino' => 'quackquack',
	'pluto' => 'bone',
	'topolino' => 'minnie'
);
	
			</pre>
			<div class="punteggio">2 punti.</div>
		
		
		</div>
		
		<div id="parte_statica">
			<h2>Pagina HTML (statica)</h2>
		
			<form method="POST">
				<div>Username: <input id="username" type="text" name="username"></div>
				<div>Password: <input id="password" type="password" name="password"></div>
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
		var username = getParameterByName('username');
		if (username) {
			document.getElementById('username').setAttribute("value", username);
			document.getElementById('password').setAttribute("value", password);
		}
		</script>
		
		<div id="parte_dinamica">
			<h2>Pagina PHP (dinamica)</h2>

<?php
	$utenti = array(
		'pippo' => 'secret',
		'paperino' => 'quackquack',
		'pluto' => 'bone',
		'topolino' => 'minnie');
		
	function draw($username, $password) {
		global $utenti;
		$accesso = false;
		if (isset($utenti[$username])) {
			if ($utenti[$username] == $password) {
				$accesso = true;
			}
		}
		if ($accesso) {
			echo  "		<p>Accesso consentito</p>\n";
		} else {
			echo  "		<p>Accesso negato</p>\n";
		}
	}

	if (isset($_POST['username']))
		draw($_POST['username'], $_POST['password']);
	
?>
		</div>
	</body>
</html>
