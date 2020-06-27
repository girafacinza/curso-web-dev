<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<title>Curso PHP</title>
	</head>
	<body>
		<?php
			function retornarPar ($num) {
				return ($num % 2 == 0 ? 'par' : 'ímpar');
			}

			echo retornarPar(2) . "<br>";
			echo retornarPar(3) . "<br>";
			echo retornarPar(3331) . "<br>";
			
			echo str_replace('faz', 'to', 'fabrica faz facas') . '<br>';
			$float = 55.6;
			echo str_replace('.', ',', $float) . '<br>';
			echo str_replace(5, 7, $float) . '<br>';
			echo str_replace(1, 3, true) . '<br>';

			echo substr('parabens pra voce', 0, 4) . '<br>';
			echo substr('parabens pra voce', 0, 6) . '...' . '<br>';
			
			$num = -4.456;
			echo ceil($num) . '<br>';
			echo floor($num) . '<br>';
			echo round($num) . '<br>';
			echo rand() . '<br>';
			echo getrandmax() . '<br>';
			echo sqrt(42) . '<br>';
			
			//recuperar data atual
			echo date('d/m/Y, D, H:i ');
			echo '<br>';
			echo date_default_timezone_set('America/Sao_Paulo');
			echo '<br>';
			echo date_default_timezone_get();
			echo '<br>';
			echo date('d/m/Y, D, H:i ');
			echo '<br>';

			$data_inicial = '2018-12-31';
			$data_final = '2020-03-15';

			$time_inicial = strtotime($data_inicial);
			echo $data_inicial . ' - ' . $time_inicial;
			echo '<br>';

			$time_final = strtotime($data_final);
			echo $time_final - $time_inicial;

		
		?>
	</body>
</html>