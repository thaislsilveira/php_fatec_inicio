<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
	<title>Aplicaçoes em php</title>
</head>
<body>
		<?php
			$nome = $_GET["nome"];
			$idade = $_GET["idade"];
			$sexo = $_GET["sexo"];

			

			echo "Nome: $nome <hr> ";
			echo "Sexo: $sexo <hr> ";
			echo "Idade: $idade <hr> ";

		?>
		<br/>
		<br/>
		<a href="exercicio04.html">Voltar</a>
</body>
</html>