<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<title>Curso PHP</title>
	</head>
	<body>
		<?php
			define ('BD_URL', 'endereco_bd_dev');

			echo BD_URL . '<br>';
			define ('BD_URL', 'mudando');
			echo BD_URL;
		?>
	</body>
</html>