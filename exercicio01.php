<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
	<title>Aplicaçoes em php</title>
</head>
<body>
		<?php
			$valor = $_GET ["valor"];

			$resultado = ($valor*10);

			echo "O resultado é :  $resultado";
		?>
</body>
</html>