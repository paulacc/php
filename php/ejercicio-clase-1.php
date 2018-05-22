<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Mistery Function</title>
	</head>
	<body>
		<?php
			$variable01 = true;
			$variable02 = false;
			$variable03 = 0;
			$variable04 = 1;
			$variable05 = 6;
			$variable06 = '';
			$variable07 = "3";
			$variable08 = "true";
			$variable09 = 'false';
			$variable10 = null;

			function tipoDato($variable02) {
		   	if ( $variable02 == true ) {
					echo "<h2>el valor $variable02 es verdadero.</h2>";
		   	} else {
					echo "<h2>el valor $variable02 es falso.</h2>";
		   	}
			}

			tipoDato($variable01);
		?>
	</body>
</html>
