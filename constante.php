<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
	<title>Aplicaçoes em php</title>
</head>
<body>
	<?php
		const SOMA = 2+2;
		define('SMTP', 'smtp.site.com.br');
		define('EMAIL', 'email@site.com.br');
		define('SENHA', '123456');

		echo '<br>' . SOMA;
		echo '<br>' . SMTP;
		echo '<br>' . EMAIL;
		echo '<br>' .SENHA;

		if(true)
		{
			define ('HOST', 'www.site.com.br');
		}

		echo '<br>' . HOST;

		const HOST2 = 'www.site2.com.br';
		if(true)
		{
			//constante com const não pode ser definida aqui !!!
		}

		echo '<br>' . HOST2;
	?>

</body>
</html>		