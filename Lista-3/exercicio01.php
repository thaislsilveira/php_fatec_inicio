<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
	<title>Aplicaçoes em php</title>
</head>
<body>
		<?php
			$total = 200000;
			$horas = floor($total / 3600);
			$minutos = floor(($total - ($horas * 3600)) / 60);
			$segundos = floor($total % 60);
			$dias = floor($horas/24);
			$diasTotal = $dias;
			$restante = floor($horas%$dias=24);
			echo $diasTotal. " dias,  ". $restante ." horas, ". $minutos . " minutos e ". $segundos.  " segundos" ;				
			
		?>
</body>
</html>