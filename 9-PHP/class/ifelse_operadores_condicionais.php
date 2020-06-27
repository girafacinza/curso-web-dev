<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<title>Curso PHP</title>
	</head>
	<body>
		<?php
			$fumante = true;

			if ($fumante == 0) {
				echo 'Não é fumante' . '<br>';
			} else {
				echo 'É fumante' . '<br>';
			}

			if (2 == '2') {
				echo 'igual' . '<br>';
			}

			if (2 === '2') {
				echo 'idêntico' . '<br>';
			}

			if (2 !== '2') {
				echo 'não idêntico' . '<br>';
			}

			$num = 3;
			$num++;
			echo $num;
		?>
		<h1>
			<?= $fumante ? 'é fumante' : 'não é fumante'?>
		
		</h1>
	</body>
</html>