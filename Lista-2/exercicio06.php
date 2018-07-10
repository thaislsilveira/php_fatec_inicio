<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
	<title>Aplicaçoes em php</title>
</head>
<body>
		<?php
		$num = 1;
		

		while($num <= 50){
			$num++;
			if(!($num % 3 == 0)){
				echo "$num<br>";
			}
		}
				
			
		?>
</body>
</html>