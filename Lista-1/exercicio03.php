<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
	<title>Aplicaçoes em php</title>
</head>
<body>
		<?php
			$valor1 = $_GET["n1"];
			$valor2 = $_GET["n2"];

			$resultado = $valor1%$valor2;

			echo "O resto da divisão é  :  $resultado";
		?>
		<br/>
		<br/>
		<a href="exercicio03.html">Voltar</a>
</body>
</html>