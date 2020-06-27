<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	</head>
	<body>
		<?php

			$itens = ['bola', 'bala', 'bolo', '', 'belo'];

			echo '<pre>';
			print_r($itens);
			echo '</pre>';

			foreach($itens as $idx => $item) {
				echo "ID $idx - item: $item. <br>";
			}

			echo '<hr>';

			$funcionarios = array (
				array('nome' => 'João', 'salario' => 2500),
				array('nome' => 'Maria', 'salario' => 5000),
				array('nome' => 'José', 'salario' => 500, 'idade' => 25)
			);

			echo '<pre>';
			print_r($funcionarios);
			echo '</pre>';

			foreach($funcionarios as $idx => $funcionario) {
				foreach ($funcionario as $key => $valor) {
					echo "$key - $valor <br>";
				}
				echo '<hr>';
			}


		?>
	</body>
</html>