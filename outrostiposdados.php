<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
	<title>Aplicaçoes em php</title>
	
</head>
<body>
	<?php
		echo '<br><h2> Trabalhando com Outros Tipos de Dados </h2>';
		echo '<br><br><h3><strong> Bollean </strong></h3>';
		echo '<br> Expressa verdadeiro ou falso, tanto faz escrever TRUE e FALSE em letras maiusculas ou minusculas';

		$jantei = false;
		echo '<br> variavel $jantei -->';

		echo var_dump($jantei);

		if($jantei)
		{
			echo '<br> Já jantei hoje';

		}
		else{
			echo '<br> Não jantei ainda, estou com fome!';
		}

		echo '<br><br>Mh3><strong>Object</strong></h3><br>';

		echo '<br>O tipo objetct vem do paradigma de orientação a objetos, onde um objeto é a instância de uma classe';
		echo '<br> Um exemplo de uso de objeto usando a classe StdClass que cria um objeto vazio';
		$obj = new StdClass();
		$obj->nome= 'George Lucas';
		$obj->email = 'george@email.com';
		$obj->filme = 'Star Wars';

		echo '<br> Tipo obj: <br>';
		echo var_dump($obj);

		echo '<br><br><h3><strong>Resource</strong></h3>';
		echo '<br> São utilizados para acesso a recursos externos ao php (Não nativo)';

		echo '<br><br><h3><strong>NUll</strong></h3>';

		echo '<br> NUll significa que a variavel não tem valor, uma variavel é considerada null se: ';
		echo '<br> Se foi inicializada com NUll';
		echo '<br> Se ainda não recebeu nenhum valor';
		echo '<br>Foi apagada usando a função <strong>unset()</strong>';

		$var1 = NULL;
		echo '<br> teste variavel var1: ';
		echo var_dump($var1);

		$var2;
		echo '<br> teste variavel var2: ';
		echo var_dump($var2);

		$var3 = 'teste';
		echo '<br> teste variavel var3: ';
		echo var_dump($var3);

		unset($var3);
		echo '<br> teste variavel var3(após unset): ';
		echo var_dump($var3);
	?>
</body>
</html>