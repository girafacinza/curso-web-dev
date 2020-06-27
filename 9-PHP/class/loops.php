<!DOCTYPE html>
	<head>
		<!-- Meta tags Obrigatórias -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<title>Curso PHP</title>
	</head>
	<body>
		<?php

			$noticias = array (
				array('título' => 'Títutlo notícia 1', 'conteúdo' => 'Conteúdo notícia 1') ,
				array('título' => 'Títutlo notícia 2', 'conteúdo' => 'Conteúdo notícia 2') ,
				array('título' => 'Títutlo notícia 3', 'conteúdo' => 'Conteúdo notícia 3') ,
				array('título' => 'Títutlo notícia 4', 'conteúdo' => 'Conteúdo notícia 4') ,
			);

		?>
		<div class="container">
			<div class="row">
			<?
				for ($i = 0; $i < count($noticias); $i++) {
					echo '<div class="col-md-4" style="border: 1px solid red;">';
					echo '<h1>' . $noticias[$i]['título'] . '</h1>';
					echo '<p>' . $noticias[$i]['conteúdo'] . '</p>';
					echo '</div>';
				}
			?>
			</div>
		</div>
	</body>
</html>