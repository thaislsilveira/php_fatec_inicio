<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
	<title>Aplicaçoes em php</title>
</head>
<body>
		<?php
			 $valor1 = 4;
			 $valor2 = 5;
			 $valor3 = 9;

			 $media = ($valor1+$valor2+$valor3)/3;

			 if($media<3){
			 	echo "Notas: $media REPROVADO!";
			 }else if($media>=4 || $media<=6){
			 	echo "Notas: $media APROVADO";
			 }else if($media>=7){
			 	echo "Notas : $media ÓTIMA";
			 }
							
			
		?>
</body>
</html>