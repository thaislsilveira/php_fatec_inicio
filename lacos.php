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
			
			echo '<h1> Estruturas de laço </h1>';

			echo '<br><h2> while </h2>';

			$a = 20;

			while ($a < 30) {
				$a++;
			}

			var_dump($a); //int 30

			$i = 0;


			while($i < 5){
				$i++;
				echo "<h2{$i}> Iteração {$i}</h{$i}>";
			}
			echo '<br><h2> do .. while </h2>';

			do{
				echo "Executou. ";
			}while(FALSE);

			$valor = 1;

			do{
				echo "Executou. ";
			}while($valor>1);

			echo '<br><h2 for </h2>';

			for($i = 1; ; $i++){
				if($i >10){
					break; //Interrompe o laço manualmente.
				}
				echo $i;
			}
			$i = 1;

			for(; ;){
				if($i > 10){
					break;
				}

				$i++;
				echo $i;
			}
				for($a = 1, $b = 1, $c = 1; $a<5; $a++, $b++, $c++){
					echo "a: ". $a . "<br>";
					echo "b: ". $b . "<br>";
					echo "c: ".$c . "<br>";
				}

				echo '<br><h2> foreach </h2>';

				$cursos = ["CSS3", "PHP", "JavaScript", "HTML5"];

				foreach ($cursos as $nome) {
					echo "Cursos: " .$nome . "<br />";
				}

				//--

				$cursos = [
						'Cursos 1' => 'PHP',
						'Cursos 2' => 'CSS',
						'Cursos 3' => 'HTML5'

				];

				foreach ($cursos as $chave => $valor) {
					echo $chave . ": " . $valor .  "<br />";
				}

				//--

				$obj = new stdClass(); //Cria um objeto padrão vazio 
				//Adicionamos valores ao objeto
				$obj ->nome = 'Marcus';
				$obj ->sobrenome = 'Miller';
				$obj ->email = 'marcusmiller@testmail.com';

				foreach ($obj as $prop => $valor) {
					echo " $prop: $valor <br/>"; 
				}

				//--

				$jogadores = [
					'Pedro' =>[
						'Time' => 'Cruzeiro',
						'Posição' => 'meio campo'

					],
					'Thiago'=>[
						'Time' => 'São Paulo',
						'Posição' => 'volante'

					],
					'José' => [
						'Time' => 'Internacional',
						'Posição' => 'zagueiro'
					],
					'Ricardo' => [
						'Time' => 'Sport Recife',
						'Posição' => 'lateral'
					],

				];


				foreach ($jogadores as $nome => $dados) {
					echo "Nome: " .$nome . "<br />";

					foreach ($dados as $item => $valor) {
						echo $item. ": " . $valor . "<br />";
					}

					echo "<br />";
				}


				echo '<br> <h2> continue e break </h2>';


				/*break interrompe o laço
				continue --> parecido com o brek mas não interrompe o laço, apenas pula a interação atual
				pode ser usado no while, do while, for e foreach
				*/

				for ($numero=0; $numero < 100; $numero++) { 
					if(($numero%2)!= 0){
						continue; // Pula
					}

					echo $numero . "<br/>"; //Imprime na tela 
				}
			
		?>
	</h4>
</body>
</html>