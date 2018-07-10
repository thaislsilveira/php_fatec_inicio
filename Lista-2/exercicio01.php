<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
	<title>Aplicaçoes em php</title>
</head>
<body>
		<?php
			
			
			for ($numero=1; $numero <50; $numero++) { 

				if($numero!=25){		

						echo $numero . "<br />";
					
				}else{					

					echo "Chegamos a metade! $numero <br /> ";
				}
			
			}
		?>
</body>
</html>