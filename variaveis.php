<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
	<title>Aplicaçoes em php</title>
	<style type="text/css">
		h4{
			color: blue;
			font-size: 30px;
		}
	</style>
	
</head>
<body>
	<h4>
		<?php
			$valor = 'Fatec ';
			$Valor = 'Curso ';
			$_valor = 'de ';
			$valorS = 'SI';
			echo $valor, $Valor, $_valor, $valorS;

			$nome = 'Thais';
			echo '<br/> Meu primeiro nome foi : ' . $nome . '<br/>';

			$nome = 'tha';
			// ele reconhece só o nome da variavel com as aspas simples
			echo 'Entretanto, meu nome mudou. Agora me chamo: $nome ' . $nome;
			// Já com as aspaas duplas ele interpreta o que está dentro da variável.
			echo "<br/> Entretanto posso escrever o código desta forma para também exibir o nome: $nome";

		?>
	</h4>
</body>
</html>