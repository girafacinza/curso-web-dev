<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<title>Curso PHP</title>
	</head>
	<body>
		<?php

			$letras = array('a', 'b', 'c');
			$letras[] = 4;

			echo '<pre>';
				var_dump($letras);
			echo '<hr />';
			echo '<pre>';
				print_r($letras);

			echo '<hr />';
			echo '<hr />';
			$frutas = array(
				'a' => 'morango',
				'b' => 'uva',
				'x' => 'pessego'
			);
			$frutas['m'] = 'manga';
			echo '<pre>';
				var_dump($frutas);
			echo '<hr />';
			echo '<pre>';
				print_r($frutas);

		
		?>
	</body>
</html>