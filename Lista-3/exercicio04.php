<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
	<title>Aplicaçoes em php</title>
</head>
<body>
		<?php
			$ano = 2000; //Formato AAAA;

			if((($ano%4==0)||($ano%400==0))&&($ano%100!=0)){
					echo "Bissexto!";	
				
			}else{
				echo "Ano não Bissexto!!";
			}
		?>
			
</body>
</html>