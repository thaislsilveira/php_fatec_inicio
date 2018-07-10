<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
	<title>Aplicaçoes em php</title>
</head>
<body>
		<?php
			
			$v = 4;

			$num = 1;
			$res = $v;
			do{
				echo "<h2>$v X $num = $res</h2>";
				$num++;
				$res=$v*$num;
			}while($num <= 15);
		?>
</body>
</html>