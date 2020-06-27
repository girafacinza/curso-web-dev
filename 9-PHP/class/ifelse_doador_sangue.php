<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<title>Curso PHP</title>
	</head>
	<body>
		<?php
			$idade = 29;
			$peso = 60;
		?>
		<h1 style="background: green;">Pode doar sangue?</h1>

		<p style="color: red;">
			<?php
				if ($idade >= 16 && $idade <= 69 && $peso >= 50) {
					echo "Atende aos requisitos";
				} else
					echo "Não atende aos requisitos";
			?>
		</p>
			
	</body>
</html>