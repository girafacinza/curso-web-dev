<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<title>Curso PHP</title>
	</head>
	<body>
		<?php

			$frutas = array(
				1 => 'Banana', 
				10 => 'Maçã', 
				9 => 'Uva',
				7 => 'Melancia',
				11 => 'Ameixa'
			);

			echo '<pre>';
			print_r($frutas);
			echo '</pre>';
		
			echo '<hr>';
			$array = 'String';

			print_r ($array);
			echo is_array($array) ? ' é array' : ' não é array';

			echo '<hr>';

			print_r (array_keys($frutas));
			echo '<hr>';

			/*sort($frutas);*/ //altera os índices
			asort($frutas); //mantém os índices

			echo '<pre>';
			print_r($frutas);
			echo '</pre>';

			echo '<hr>';
			$frutas2 = ['Pêssego', 'Abacate'];
			$frutas3 = ['Manga'];
			$frutas_todas = array_merge($frutas, $frutas2, $frutas3);

			echo '<pre>';
			print_r($frutas_todas);
			echo '</pre>';

			echo '<hr>';

			$string = '04/17/1991';
			$data = explode('/', $string);

			echo '<pre>';
			print_r($data);
			echo '</pre>';

			echo '<hr>';

			$string_retorno = implode('-', $data);
			echo $string_retorno;

		?>
	</body>
</html>