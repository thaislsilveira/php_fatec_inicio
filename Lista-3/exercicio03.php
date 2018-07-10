<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
	<title>Aplicaçoes em php</title>
</head>
<body>
		<?php
			 $valorInicial = 1;
			 $valorFinal = 8;
			 $soma = 0;

			 for($valorInicial = $valorInicial+1; $valorInicial < $valorFinal; $valorInicial++){

			 	$soma = $soma + $valorInicial;
			 }

			 echo "A soma dos valores são $soma";
				
			
		?>
</body>
</html>