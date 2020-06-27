<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<title>Curso PHP</title>
	</head>
	<body>
		<?php
			$nome = "Lucas";
			$idade = 29;
			$peso = 73.55;
			$fumante_sn = true; //true=1 false=vazio
			
			$fumante_sn = false;

			$frase = 'Olá ' . $nome . ', você tem ' . $idade . 'anos';
			$frase2 = "Olá $nome, você tem $idade anos";

		?>

		<h1>Ficha cadastral</h1>
		<br>
		<p>Nome: <?= $nome ?></p>
		<p>Idade : <?= $idade ?></p>
		<p>Peso: <?= $peso ?>kg</p>
		<p>Fumante: <?= $fumante_sn ?></p>
		<br>
		<p><?= $frase ?></p>
		<p><?= $frase2 ?></p>
	</body>
</html>