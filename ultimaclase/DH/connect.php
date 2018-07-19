<?php
	$ruta = 'mysql:host=localhost; dbname=movies_db';
	$usuario = 'root';
	$password = 'iorana';
	$opciones = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

	try {
		$db = new PDO($ruta, $usuario, $password, $opciones);
		echo "Me conecté todo joya";
	}
	catch( PDOException $ErrorEnConexion ) {
		echo "Se ha producido un terrible error: ".$ErrorEnConexion->getMessage();
	}
?>
