<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
	<title>Aplicaçoes em php</title>
</head>
<body>

	<?php
		echo '<h1>Operadores</h1>';
		echo '<br><h2>Operadores Aritméticos </h2>';

		/* - $a --> negação --> oposto de $a
		$a + $b -->Adição --> soma de $a + $b
		$a - $b --> substração --> diferença de $a - $b
		$a* $b --> multiplicação --> produto de $a * $b
		$a/ $b --> divisão --> quociente de 4a por $b
		$a % $b --> Módulo --> Resto de $a divido por $b
		*/

		$operacao = 20/8;
		var_dump($operacao); //Float 2.5

		$operacao = 20/4;
		var_dump($operacao); //Int 5

		$operacao = (int) "20.5" / 2;
		var_dump($operacao); //Int 10
		$a = 20;
		$b = 3;

		var_dump($a % $b); //Int 2

		$a = -20;
		$b = 3;
		var_dump($a % $b); //int -2

		var_dump($a + -$b);// 20 + (-6) =  In 14

		$a = 20;
		$b = 3;

		var_dump($a - $b); //Int 17

		$a = 20;
		$b = 3;

		var_dump($a + $b); //Int 23

		$a = 20;
		$b = 3;

		var_dump($a /$b); // Float 6.66..
		$a = 20;
		$b = 3;

		var_dump($a + $b); //Int 60

		echo '<br><h2> Operadores Atribuição </h2>';

		echo 'Operador =';

		$a = 20;

		echo 'No exemplo abaixo $a recebeu o valor de $b e somou 5, a variavel $b foi criada dinamicamente';
		$a = ($b = 20) + 5;

		var_dump($a);

		var_dump($b);

		echo 'Valores de atribuição combinados com operadores aritméticos';
		$a = 20;
		$a += 3;

		var_dump($a); //Int 23

		var_dump($a); //Int 17

		$a = 20;
		$a *= 3;

		var_dump($a); //Int 60

		$a = 20;
		$a /= 3;

		var_dump($a); //Float 6.66..
		$a = 20;
		$a %= 3;

		var_dump($a); //Int 2

		echo 'Vale também para concatenar strings';

		$a = "fatec";
		$a .= "Cursos";

		var_dump($a); //String 'fatec Cursos'

		echo '<br><h2> Operadores Comparação </h2>';

		/* $a == $b --> igual --> Verdadeiro se $a é igual a $b
		$a === $b --> identico(valor e tipo ) --> verdadeiro de $a é igual a $b no valor e no tipo
		$a != $b --> diferente --> verdadeiro se #a não é igual a $b
		$a <> $b --> diferente --> verdadeiro se $a não é igual a $b
		$a !== $b --> não identico --> verdadeiro se $a não é igual a $b
		$a < $b --> menor que
		$a > $b --> maior que
		$a <= $b --> menor ou igual
		$a >= $b --> maior ou igual
		*/

		$a = "2.1";
		$b = "2";

		var_dump($a > $b);

		$a = "2.1";
		$b = 2;

		var_dump($a > $b); // ocorre a conversão do valor string

		//como a string não possui nenhum valor numerico no inicio, 
		// a conversão dessa string resultará em zero assim 0=0 --> true

		var_dump("teste" == 0);
		//seguindo a lógica...

		var_dump("11t" == 11);

		//retorna true pois o t minusculo tem se valor decimal em 116 e o maiuculo em 84

		$a = "teste";
		$b = "Teste";

		var_dump($a > $b);

		//retorna falso pois B = 66 que é maior que A = 65

		$a = "A";
		$b = "B";

		var_dump($a > $b);

		//outros exemplos

		var_dump(20 > 10); // 20 é maior que 10 = true

		var_dump(20 >= 10 ); // 20 é maior ou igual a 10 = true

		var_dump(20 < 10 ); // 20 é maior que 10 = false

		var_dump(20 <= 10 ); // 20 é menor ou igual a 10 = false

		var_dump(20 == 20 ); // 20 é igual a 10 = false

		var_dump(20 != 10); // 20 é diferente de 10 = true

		var_dump(20 <> 10); // 20 é diferente de 10 = true

		var_dump("10" === 10); // "10" é igual e de mesmo tipo que 10 = false
		var_dump(10 === 10); // 10 é igual e de mesmo tipo que 10 = true
		var_dump("10"=== "10"); // "10" é igual e de mesmo tipo que "10" = true

		var_dump("10" !== 10); // "10" não é idêntico (valor e tipo) a 10 = true

		echo '<br><h2> Operadores Lógicos</h2>';

		/*
			$a && $b --> verdadeiro se tanto $a quanto $b são verdadeiros
			$a || $b --> OU --> verdadeiro se $a ou $b for verdadeiro
			$a xor $b --> XOR --> verdadeiro se $a ou $b são verdadeiros, mas não ambos
			!$a --> não --> verdadeiro se $a não é verdadeiro

			$a and $b --> E --> verdadeiro se tanto $a quando $b são verdadeiros
			$a or $b --> OU --> verdadeiro se $a ou $b for verdadeiro

		*/ 

			$a = FALSE;
			$b = TRUE;
			$c = TRUE;

			//AND

			var_dump($a && $b ); //False

			var_dump($b && $a); //False

			var_dump($b && $c); //True

			//OU

			var_dump($a || $b ); //True

			var_dump($b || $a ); //True

			var_dump($a || $a); //False

			var_dump($b || $c ); //True

			// Negação (Não)

			var_dump(!$a); // Não Verdadeiro = True

			var_dump(!$b); // Não verdadeiro = False

			// XOR

			var_dump($a XOR $b ); //true

			var_dump($b XOR $c ); //False

			echo '<br><h2>Operadores de pré e pos incremento/decremento </h2>';
			/*
				++$a --> pré incremento. incrementa $a em um, e então retorna $a
				$a++ --> pós incremento. Retorna $a e depois incrementa em um 
				--$a --> pré decremento. decre,emta $a em um e depois retorna 
				$a ---> pós decremento . retorna $a e depois decrementa.

			*/

				$a = 5;

				//pós-incremento


				echo $a++; // 5 só muda na p´roxima linha
				var_dump( $a); //6

				//pós-decremento
				echo $a--;
				var_dump($a);

				$a = 5;

				// pré-decremento

				echo  ++$a; // imprime 6 já faz a alteração neste linha 
				var_dump($a); // 6

				//pre-decremento
				echo --$a; // 5 já subtrai neste momento
				var_dump($a); //5

				//Outros exemplos


				//String numérica

				$a = "1";

				$a++;
				var_dump($a);

				//Valor booleano

				$a = TRUE;


				$a++; //Não afeta
				var_dump($a);

				$a--; // Não afeta
				var_dump($a);


				//Valor nulo

				$a = NULL;

				$a--;
				var_dump($a); // Não afeta. Mantêm-se NULL.

				$a++;
				var_dump($a); // INcrementa em 1;




	?>
</body>
</html>	