<?php
    // Países
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

  <?php

 $paises = ["Chile","Argentina","Mexico","Colombia","Venezuela","Peru","Ecuador","Brasil","Bolivia"];
 $b =implode(".",$paises);
 $errores = [];
 $email = $_POST['email'];
 $name = $_POST['name'];
 $numero = $_POST['numero'];
//empty Si  está vacío el campo
//Primero se pregunta si hay un solicitud post para hacer las validaciones
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(empty($name))
          {
           echo $errores = "El campo nombre es obligatorio";
         }elseif (!ctype_alpha($name)) {
           echo $errores = "El campo nombre solo debe contener letras";
         }
         if( empty($_POST['username'])){
          echo "<br>";
         echo $errores = "El campo username es obligatorio";
         }
         if( empty($_POST['email'])){
          echo "<br>";
         echo $errores = "El campo email es obligatorio";
         }elseif(substr_count($email, "@") != 1) {
             echo "<br>";
          echo $errores = 'El correo no es válido, falta el signo "@" <br>';
        }elseif(substr_count($email, ".") != 1){
            echo "<br>";
          echo $errores = 'El correo no es válido, falta signo punto';
        }
        if(empty($numero)){
            echo "<br>";
            echo $errores = "El campo telefono es obligatorio";
        }elseif(!is_numeric($numero)){
          echo "<br>";
        echo $errores = 'El telefono debe incluir solo numeros';
        }elseif(strlen($numero) < 8){
          echo "<br>";
          echo $errores = 'El telefono debe incluir como minimo 8 digitos';
        }
         if(empty($_POST['password'])){
           echo "<br>";
          echo $errores = "Debes ingresar una contraseña ";
        }elseif ((strlen($_POST['password']) < 4 )) {
          echo $errores = "La contraseña debe tener mas de 4 caracteres ";
        }
        if($_POST['password'] != $_POST['rpassword']){
          echo "<br>";
         echo $errores = "las contraseñas deben coincidir ";
        }
        if(empty($_POST['direccion'])){
          echo $errores = "la direccion es obligatoria";
        }


}
   ?>
   <form action="register.php" method='post'>
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
        <label for="passwd">comprobar contraseña*</label>
        <input type="password" name="rpassword" id="passwd">
      </div>
      <div class="form-control">
        <label for="numero">telefono de contacto*</label>
        <input type="text" name="numero" id="numero">
      </div>
      <div class="form-control">
        <label for="direccion">direccion de dominicilio*</label>
        <input type="text" name="direccion" id="direccion">
      </div>

     <div class="form-control">
      <label for="pregunta"> Pais de nacimiento</label>
      <br>
      <select name="pais">
          <?php foreach ($paises as $pais):?>
              <option value="<?php echo $pais?>"> <?php echo $pais ?> </option>
            <?php endforeach; ?>
    </select>
    </div>
     <div class="form-control">

       <label for="pasatiempos">Tus pasatiemos</label>
        <br>
       <input type="checkbox" name="hobbies[]" value="Leer"> Leer<br>
       <input type="checkbox" name="hobbies[]" value="Teatro" > Teatro<br>
       <input type="checkbox" name="hobbies[]" value="Cine">Cine <br>
       <input type="checkbox" name="hobbies[]" value="Pasear"> Pasear<br>

     </div>
			<div class='form-control'>
				<button type="submit">ENVIAR</button>
			</div>

      </fieldset>
   </form>
</body>
</html>
