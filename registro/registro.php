<?php
require_once('funciones.php');
	// Array de países para el foreach en el select
	$paises = ['Argentina', 'Brasil', 'Colombia', 'Sin Mundial'];

$name = '';
$email = '';
$pais = '';
$errores = [];

if ($_POST) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $pais = trim($_POST['pais']);
    $errores = validar($_POST);

    if (empty($errores)) {
			// En la variable $usuario, guardo al usuario creado con la función crearUsuario() la cual recibe los datos de $_POST y el avatar
		$errores = guardarImagen('archivo');
		if (count($errores) == 0) {
			$usuario = crearArrayUsuario($_POST,'archivo');
	        guardarUsuario($usuario);
	        var_dump('registro exitoso');
	        exit;
		}

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
						<div class="form-group <?= isset($errores['name']) ? 'has-error' : null ?>">
							<label class="control-label">Nombre:</label>
							<input type="text" class="form-control" name="name" value="<?=$name?>">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group <?= isset($errores['email']) ? 'has-error' : null ?>">
							<label class="control-label">Email:</label>
							<input class="form-control" type="text" name="email" value="<?=$email?>">
		            </div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6">
						<div class="form-group <?= isset($errores['pass']) ? 'has-error' : null ?>">
							<label class="control-label">Contraseña:</label>
							<input class="form-control" type="password" name="pass" value="">
		            </div>
					</div>
					<div class="col-sm-6">
						<div class="form-group <?= isset($errores['pass']) ? 'has-error' : null ?>">
							<label class="control-label">Repetir Contraseña:</label>
							<input class="form-control" type="password" name="rpass" value="">
                        </div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6">
						<div class="form-group <?= isset($errores['pais']) ? 'has-error' : null ?>">
					  <label class="control-label">País:</label>
                      <select class="form-control" class="" name="pais">
                      <option value="">Elegi País</option>
					   	<?php foreach ($paises as $value): ?>
                                <?php if ($value == $pais): ?>
                                    <option selected value="<?=$value?>"><?=$value?></option>
                                <?php else: ?>
                                    <option value="<?=$value?>"><?=$value?></option>
                                <?php endif; ?>
                       <?php endforeach; ?>
                               </select>
		                </div>
					</div>
				</div>
				<br><br><br>
				<label for="foto">Subi tu fotito</label>
				<input type="file" name="archivo" id="foto">

            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
	  	</div>

   </body>
</html>
