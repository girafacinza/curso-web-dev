<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<title>Curso PHP</title>
	</head>
	<body>
		<?php
			$idade = '19';

			switch ($idade) {
				case '18':
					echo 'dezoito';
					break;
				case 19:
					echo 'dezenove';
					break;
				default:
					echo 'nenhuma idade';
					break;
			}
		?>
	</body>
</html>