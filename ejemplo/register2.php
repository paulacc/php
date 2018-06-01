<?php
    // Países
	 $paises = ['Argentina', 'Brasil', 'Colombia', 'Chile', 'Ecuador', 'Paraguay', 'Perú', 'Uruguay', 'Venezuela' ];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact us</title>
	 <style media="screen">
	 	* {
	 		box-sizing: border-box;
	 	}
	 	.form-control {
	 		border: solid 1px #dddddd;
			background-color: #eeeeee;
			padding: 5px;
			margin-bottom: 10px;
	 	}
		.form-control input:not([type=checkbox]) {
			display: block;
			height: 40px;
			width: 100%;
			margin-top: 5px;
			padding: 15px;
			font-size: 1em;
			outline: none;
		}
		.form-control select {
			width: 60%;
			height: 40px;
			font-size: 1em;
			outline: none;
		}
		.form-control button {
			background-color: #24c4d4;
			color: #FFFFFF;
			font-size: 1.2em;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
		}
	 </style>
</head>
<body>
   <form method='post' action="confirmacion_2.php">
      <fieldset >
			<legend>Registrate</legend>

			<strong>* campos requeridos</strong><br><br>

			<div class='form-control'>
				<label for='name' >Nombre completo*: </label>
				<input type='text' name='name' id='name'>
			</div>

			<div class='form-control'>
				<label for='email' >Email*:</label>
				<input type='text' name='email' id='email'>
			</div>

			<div class='form-control'>
				<label for='username' >Nombre de usuario*:</label>
				<input type='text' name='username' id='username'>
			</div>

			<div class='form-control'>
				<label for='password'>Contraseña*:</label>
				<input type='password' name='password' id='password'>
			</div>

			<div class='form-control'>
				<label>País*:</label>
				<select name="country">
					<option value="">Seleccioná</option>
					<?php foreach ($paises as $pais):?>
             		<option value="<?=$pais?>"><?=$pais?></option>
           		<?php endforeach; ?>
				</select>
			</div>

			<div class='form-control'>
				<label>Pasatiempos*:</label>
				<label><input type="checkbox" name="hobbies[]" value="Leer"> Leer</label>
				<label><input type="checkbox" name="hobbies[]" value="Pasear"> Pasear</label>
				<label><input type="checkbox" name="hobbies[]" value="Codear"> Codear</label>
			</div>

			<div class='form-control'>
				<button type="submit">ENVIAR</button>
			</div>

      </fieldset>
   </form>
</body>
</html>
