<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
	<title>Aplicaçoes em php</title>
</head>
<body>
	<?php
		header ('Content-type : text/html; charset=utf-8');

		/*
		*Tipos Básicos : Integer, boolean, float (Double), Sting

		Tipos compostos: Array, Object

		Tipos especiais: Resource, NULL

		Declaração das variáveis

		*/

		$v_string = " Fatec";
		$v_boolean = TRUE;
		$v_integer = 100;
		$v_float = 100.9;

		//Impressão dos tipos

		echo '<br>' . gettype($v_float); // Retorna o tipo da variavel.

		var_dump($v_float); // Retorna o tipo e o valor da variável

		var_dump($v_boolean); // Retorna o tipo e o valor da variavel

		//verificação de tipos

		if(is_int($v_integer)){
			echo '<br> $v_integer é um inteiro . <br/>';
		}

		if (!is_bool($v_string)){
			echo '<br>$v_string não é um valor booleano ';

		}
		/*
			Verificação de variaveis


			is_bool()
			is_float()
			is_numeric()
			is_string()
			is_array()
			is_object()


			Atenção para as linhas de codigo


		*/

			echo '<br>' .gettype($v_float); //retorna double
			var_dump($v_float); //retorna float
			//No PHP os tipos double, real e float são equivalentes, assim como int e integer

			//teste var_dump

			echo 'Teste com a função --> var_dump';

			$int = 200;
			$float = 2.4;
			$bool = true;

			var_dump($int);
			var_dump($float);
			var_dump($bool);


			/* descomentar a linha zend_extension do php.int no xampp
			*/


	?>
</body>
</html>