<?php

$lcd = array();

$lcd['linhas']  = 2;
$lcd['colunas'] = 16;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>LCD ARDUINO</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
	<meta name="format-detection" http-equiv="Content-Type" content="text/html; charset=utf-8; telephone=no" />

	<link rel="stylesheet" href="css/estilos.css" type="text/css" />


</head>

<body>
	<h1>LCD Arduino</h1>
<div class="lcd">

	<?php



	for($w = 0; $w<$lcd['linhas']; $w++){

		echo '<div class="linha">';

			for($k = 0; $k<$lcd['colunas']; $k++){
				echo '<div class="digito">';
				for($i = 0; $i < 8; $i++){
					echo '<canvas id="pixel-0-0" class="pixel off"></canvas>
								<canvas id="pixel-0-1" class="pixel off"></canvas>
								<canvas id="pixel-0-2" class="pixel off"></canvas>
								<canvas id="pixel-0-3" class="pixel off"></canvas>
								<canvas id="pixel-0-4" class="pixel off"></canvas> ';
				}
				echo '</div>';
			}

		echo '</div>';

	}

	?>
</div>
</body>
</html>
