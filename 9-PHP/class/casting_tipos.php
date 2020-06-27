<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<title>Curso PHP</title>
	</head>
	<body>
		<?php
			$valor = 10;
			$valor2 = (float) $valor;
			echo $valor . gettype($valor) . '<br>';
			echo $valor2 . gettype($valor2) . '<br><br>';

			$valor = 10.75;
			$valor2 = (int) $valor;
			echo $valor . gettype($valor) . '<br>';
			echo $valor2 . gettype($valor2) . '<br><br>';

			$valor = 10.75;
			$valor2 = (string) $valor;
			echo $valor . gettype($valor) . '<br>';
			echo $valor2 . gettype($valor2) . '<br><br>';

			$valor = "10.75";
			$valor2 = (int) $valor;
			echo $valor . gettype($valor) . '<br>';
			echo $valor2 . gettype($valor2) . '<br><br>';

			$valor = "2";
			$valor2 = (int) $valor;
			echo $valor . gettype($valor) . '<br>';
			echo $valor2 . gettype($valor2) . '<br><br>';

			$valor = false;
			$valor2 = (string) $valor;
			echo $valor . gettype($valor) . '<br>';
			echo $valor2 . gettype($valor2) . '<br><br>';

			$valor = false;
			$valor2 = (int) $valor;
			echo $valor . gettype($valor) . '<br>';
			echo $valor2 . gettype($valor2) . '<br><br>';

			$valor = 42;
			$valor2 = (float) $valor;
			echo $valor . gettype($valor) . '<br>';
			echo $valor2 . gettype($valor2) . '<br><br>';
			
			echo "$valor + $valor2 = " . ($valor + $valor2);

			echo "<br>";

			echo ++$valor;

			echo "<br>";

			echo $valor++;

			echo "<br>";

			echo $valor;
		?>
	</body>
</html>