<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
	<title>Aplicaçoes em php</title>
	<style type="text/css">
		h2{
			color: red;
		}
	</style>
	
</head>
<body>
	<?php
		echo '<br><h2>Trabalhando com Numeros </h2>';

		echo '<br><br><h3><strong>Numeros em Inteiros</strong></h3>';

		echo '<br><br>Inteiro :';
		echo var_dump(12345); //decimal

		echo '<br> Inteiro Negativo : ';
		echo var_dump(-12345);//decimal negativo

		echo '<br>Octal 0755:';
		echo var_dump(0755);//local equivalente a 493 em decimal

		echo '<br>Hexadecimal 0xff: ';
		echo var_dump(0xff); //hexadecimal, equivalente a 255 em decimal

		//tipo int e integer são os mesmos tipos de dados

		//o tamanho do inteiro depende da plataforma (32 ou 64 bits)
		//pode ser verificado pela constante PHP_INT_MAX e Overflow

		$maxint = PHP_INT_MAX;
		echo'<br><br>Tamanho integer : ';
		echo var_dump($maxint);

		$maxint = $maxint+10;

		echo '<br> integer(overflow para float): ';
		echo var_dump($maxint);

		echo '<br> integer (Notação): ';
		echo var_dump($maxint+1000000000000000000000);

		//Divisão de inteiros
		echo '<br><br>Divisão de numeros inteiros (float): ';
		echo var_dump(round(25/7));

		//arredonda o numero mas retorna a variavel como float
		echo '<br><br>Divisão de numeros inteiros (float com round): ';
		echo var_dump(round(27/7));

		//converte o resultado para ineiro fazendo o arredondamento automático
		echo '<br><br>Divisão de numeros inteiros (integer): ';
		echo var_dump((int) round(25/7));
		echo '<br><br>';
		echo '<br><strong> (int) é um operador de casting, ao usa-lo força-se a conversão daquele valor para inteiro </strong>';
		echo '<br><strong>round() é uma fração de arredondamento. </strong>';

		echo '<br><br><h3><strong>Numeros em ponto flutuante</strong></h3>';
		echo '<br><strong>Potencia:</strong>--> pow(10,3): ';
		echo var_dump(pow(10,3));
		echo '<br> Igual a (10*(10*10)) -->';
		echo var_dump(10*10*10);
		echo '<br><strong>(Não funciona desta forma(XOR)) Potencia:<strong> --> (10^3): ';
		
		echo var_dump(10^3);

		echo '<br><br><h3><strong>Formatando valores para o padrão brasileiro </strong></h3>';

		$saldo = 10000.00;
		$retirada = 200.50;

		$resultado = $saldo-$retirada;

		echo '<br>Valor Saldo : ';
		echo $resultado;

		echo '<br>Valor Saldo (formatado) : ';
		echo 'R$' . number_format($resultado, 2, ',', '.');


	?>
</body>
</html>