<?php
	// Array de países para el foreach en el select
	$paises = ['Argentina', 'Brasil', 'Colombia', 'Sin Mundial'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulario</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <style media="screen">
        *{
           box-sizing: border-box;
        }

        body{
            background-color: #eff0ef;
            font-family: sans-serif;
        }

        .data-form{
            max-width: 800px;
            margin: 30px auto;
            padding: 15px 40px;;
            border: solid 1px #ccc;
           text-align: center;
            border-radius: 8px;
        }

        .div-errores{
            max-width: 500px;
            margin: auto;
        }

        </style>
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
    <?php
         $name = '';
				 $email = '';
         $pais = '';
				 $errores = [];

				 if ($_POST){
					 $name = trim($_POST['name']);
					 $email = trim($_POST['email']);
					$pais = trim($_POST['pais']);
				 }

        if($name == '');{
					$errores['name'] = "";
				}


		 ?>
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
												  <?php if($value == $pais):?>
 														<option selected
														value="<?=$value?>"> <?=$value?></option>
													<?php else: ?>
														<option value="<?=$value?>"><?=$value?></option>
													<?php endif; ?>
                   <?php endforeach; ?>
                               </select>
		                </div>
										<div class="col-xs-6">
											<div class="form-group <?= isset($errores['avatar']) ? 'has-error' : null ?>">
												<label for="name" class="control-label">Subir imagen:</label>
												<input class="form-control" type="file" name="avatar" value="<?= isset($_FILES['avatar']) ? $_FILES['avatar']['name'] : null ?>">
												<span class="help-block" style="<?= !isset($errores['avatar']) ? 'display: none;' : '' ; ?>">
													<b class="glyphicon glyphicon-exclamation-sign"></b>
													<?= isset($errores['avatar']) ? $errores['avatar'] : '' ;?>
												</span>
											</div>
					       </div>
				</div>



            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
	  	</div>
   </body>
</html>
