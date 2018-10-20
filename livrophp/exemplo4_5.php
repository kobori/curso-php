<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$num = 5000;
		function testa_escopo1 () {
			global $num;
			$num += 5;
			echo $num . "<br>";
		}
		echo $num . "<br>";
		testa_escopo1();
	 ?>
	
</body>
</html>