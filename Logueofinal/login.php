<?php
	require_once('funciones.php');

	if (estaLogueado()) {
		header('location: perfil.php');
		exit;
	}

	// Variables para persistencia
	$email = '';

	// Array de errores vacío
	$errores = [];

	// Si envían algo por $_POST
	if ($_POST) {
		$email = trim($_POST['email']);

		$errores = validarLogin($_POST);

		if (empty($errores)) {
			$usuario = existeEmail($email);

			loguear($usuario);

			// Seteo la cookie
			if (isset($_POST["recordar"])) {
	        setcookie('id', $usuario['id'], time() + 3600 * 24 * 30);
	      }

			header('location: perfil.php');
			exit;
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulario</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
   <body>
		<?php if (!empty($errores)): ?>
			<div class="div-errores alert alert-danger">
				<ul>
					<?php foreach ($errores as $value): ?>
					<li><?=$value?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>

		<div class="data-form">
			<form  method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="name">Email:</label>
							<input class="form-control" type="text" name="email" value="<?=$email?>">
							<?php if (isset($errores['email'])): ?>
								<span style="color: red;">
									<b class="glyphicon glyphicon-exclamation-sign"></b>
									<?=$errores['email'];?>
								</span>
							<?php endif; ?>
		            </div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="name">Contraseña:</label>
							<input class="form-control" type="text" name="pass" value="">
							<?php if (isset($errores['pass'])): ?>
								<span style="color: red;">
									<b class="glyphicon glyphicon-exclamation-sign"></b>
									<?=$errores['pass'];?>
								</span>
							<?php endif; ?>
		            </div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<input type="checkbox" name="recordar">
							Recordar
						</div>
					</div>
				</div>

            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
	  	</div>
   </body>
</html>
