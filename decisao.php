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
			echo '<h1>Estruturas de decisão </h1>';

			echo '<br><h2> IF </h2>';

			$a = 20;
			$b = 15;

			if($a == $b){
				echo "Sim, é igual.";

			}else{
				echo "Não é igual.";
			}

			$idade = 18;

			if($idade >=18){

				echo "Jovem ";
			}else{
				echo "Não sei ";
			}

			$idade = 17;

			if($idade> 12 && $idade <18){
				echo "Adolescente; ";
			} else{
				echo "Não sei ";
			}
			$a = 10;
			$b = 10;

			if($a == $b){ //Igual
				echo "Entrou 1; ";
			}
			if($a >= $b){// Maior ou Igual
				echo "Entrou 2; ";
			}
			if($a > $b){// Maior
				echo "Entrou 3; ";
			}
			if($a < $b){// Menor
				echo "Entrou 4; ";
			}
			if($a <= $b){// Menor ou igual
				echo "Entrou 5; ";
			}


			echo '<br><h2>Elseif </h2>';


			$a = 20;
			$b = 25;


			if($a == $b){// FALSE
				echo "A e B são iguais.";
			}elseif( $a > $b){ //FALSE
				echo "A é maior que B";
			}elseif ($a >=$b) { //FALSE
				echo "A é maior ou igual a B";
			}elseif ($b < $a) { //FALSE
				echo "B é menor que A.";
			}elseif ($a < $b) { //TRUE
				echo "A é menor que B.";
			}else{
				echo "Nenhuma condição foi satisfeita.";
			}

			echo '<br><h2> switch </h2>';

			$i = 1;

			switch ($i) {
				case 0:
					echo "I é igual a 0";
					break;
				
				case 1:
					echo "I é igual a 1";
					break;
				case 2:
					echo "I é igual a 2";
					break;	
			}

		?>
	</h4>
</body>
</html>