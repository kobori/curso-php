<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		#demo {
			width: 50%;
			height: 200px;
			color: #ffff;
			font-size: 30px;
			background-color: #607d8b;
			margin: auto;
			padding: 20px;
		}
	</style>
</head>
<body>

	<?php 
	// variáveis criadas durante a execução
		$texto = "Porto Alegre";
		$futuro_identificador = "cidade";
		$$futuro_identificador = $texto;
		echo "<h2 align=center>";
		echo "Minha cidade é $cidade";
		echo "</h2>";
	 ?>
	
</body>
</html>