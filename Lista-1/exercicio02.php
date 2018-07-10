<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
	<title>Aplicaçoes em php</title>
</head>
<body>
		<?php
			$n = $_GET ["n"];
			$n1 = $_GET["n1"];

			$resultado = (($n+$n1)*(40/2) - 1);

			echo "O resultado é :  $resultado";
		?>
		<br/>
		<br/>
		<a href="exercicio02.html">Voltar</a>
</body>
</html>