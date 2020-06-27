<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<title>Curso PHP</title>
	</head>
	<body>
		<?php

			$lista_coisas = [];

			$lista_coisas['frutas'] = array(
				1 => 'Banana', 
				2 => 'Maçã', 
				3 =>'Uva'
			);
			$lista_coisas['pessoas'] = [
				1 => 'Lucas',
				2 => 'Bob',
				3 => 'Maria'
			];

			echo '<pre>';
			print_r($lista_coisas);
			echo '</pre>';
		
			$busca = 'Lucas';
			//in_array() - true or vazio se não encontra
			echo $busca . (in_array($busca, $lista_coisas['pessoas']) ? ' existe no array' : ' não existe no array');	

			echo '<br>';
			//array_search() - posicao da busca ou vazio se não encontra

			echo $busca . ' está na posição ' . array_search($busca, $lista_coisas['pessoas']);	


		?>
	</body>
</html>