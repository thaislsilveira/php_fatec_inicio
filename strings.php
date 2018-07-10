<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
	<title>Aplicaçoes em php</title>
</head>
<body>
	<?php
		echo '<br><h2> Trabalhando com Strings</h2>';

		echo '<br> Armazena uma cadeia de caracteres: ';
		echo '<br> Não são apenas textos, são coleções ordenadas de binários ';
		echo '<br> Podem utilizar as pas simples ou duplas';

		echo'<br><br><h3><strong>Aspas duplas</strong></h3>';

		echo '<br> Uma caracteristica das aspas duplas é que dentro delas o interpretador do PHP procura por variaveis, ' . 'se encontra, interpreta';

		$nome = "Thais";
		echo '<br> Variavel Nome: ';
		echo var_dump($nome);

		$sobrenome = 'Silveira';
		echo '<br> Variavel sobrenome : ';
		echo var_dump($sobrenome);

		$nomecompleto = " Thais $sobrenome";
		echo '<br> Variavel nomecompleto : ';
		echo var_dump($nomecompleto);

		echo '<br><br><h3><strong>Aspas Simples</strong></h3>';
		echo '<br>O valor da variavel é exatamente o que foi escrito nela ';
		$nomecompleto2 = 'Thais $sobrenome';
		echo '<br> Variavel nomecompleto2: ';
		echo var_dump($nomecompleto2);

		echo '<br><br><h3><strong>Marcações HTML e CSS </strong></h3>';

		echo '<br><h1> Teste h1</h1>';

		echo '<br><br><h3><strong> PEgando uma poisção da String</strong></h3>';

		$nome2 = "Thais Silveira";
		echo "<br> Pegando a posição 10 da variavel nome2 : ";
		echo $nome2{10};

		echo '<br><br><h3><strong> Concatenação</strong><h3/>';
		$texto1 = "Primeiro";

		$texto2 = "Segundo";

		$res1 = $texto1 . "Testes";
		echo '<br>';
		echo $res1;	

		$res2 = $texto1 .  " " . $texto2;
		echo '<br>';
		echo $res2;

		$texto1 .= " concatena ";
		$texto2 = $texto2 . " concatena ";
		echo '<br>';
		echo $texto1;
		echo '<br>';
		echo $texto2;



	?>
</body>
</html>