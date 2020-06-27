<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	</head>
	<body>
		<?php
			$numeros = array(rand(1,60));
			$aux = true;
			do {
				$novo_numero = rand(1,60);
				foreach ($numeros as $numero) {
					if ($novo_numero == $numero) {
						$aux = false;
						break;
					}
				}
				if ($aux)
					$numeros[] = $novo_numero;
				else
					$aux = true;
			} while (count($numeros) <= 6);

			sort($numeros);
			echo 'Os números sorteados são: ';
			foreach ($numeros as $numero){
				echo $numero . ' ';
			}
			echo '.<br>';
		?>
	</body>
</html>