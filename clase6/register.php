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

 $email=  '';
 $name = '';
 $numero= '';
 $direccion = '';
 $pass = '';
 $rpass ='';
 $direccion = '';
 $username = '';

 //esto esta aca para la persistencia de los datos que estan ok
//empty Si  está vacío el campo
//Primero se pregunta si hay un solicitud post para hacer las validaciones
//trim es para quitar los espacios
if ($_POST){

  $email= trim($_POST['email']);
  $name = trim($_POST['name']);
  $numero= trim($_POST['numero']);
  $pass= trim($_POST['password']);
  $rpass = trim($_POST['rpassword']);
  $direccion = trim($_POST['direccion']);
  $username = trim($_POST['username']);

        if(empty($name))
          {
            $errores['name'] = "El campo nombre es obligatorio";
         }elseif (!ctype_alpha($name)) {
            $errores['name'] = "El campo nombre solo debe contener letras";
         }
         if( empty($username)){
          $errores['username'] = "El campo username es obligatorio";
         }
         if($email == ''){
          $errores['email']= "El campo email es obligatorio";
         // }elseif(substr_count($email, "@") != 1) {
         }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {

           $errores['email'] = 'El correo no es válido" <br>';
        }
        if(empty($numero)){

         $errores['numero']= "El campo telefono es obligatorio";
        }elseif(!is_numeric($numero)){
         $errores['numero'] = 'El telefono debe incluir solo numeros';
        }elseif(strlen($numero) < 8){
           $errores['numero'] = 'El telefono debe incluir como minimo 8 digitos';
        }
         if(empty($pass)){
           $errores['password'] = "Debes ingresar una contraseña ";
        }elseif ((strlen($pass) < 4 )) {
           $errores['password'] = "La contraseña debe tener mas de 4 caracteres ";
        }
        if($pass != $rpass){
          $errores['rpassword']= "las contraseñas deben coincidir ";
        }
        if(empty($direccion)){
           $errores['direccion'] = "la direccion es obligatoria";
        }

         if(count($errores) == 0 ){
           $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
           $_POST['rpassword'] = password_hash($_POST['rpassword'], PASSWORD_DEFAULT);
           // $_POST['hobbies'] = implode(', ', $_POST['hobbies']);
           //el password_hash es para encriptar la password

           $datosform = json_encode($_POST);
           file_put_contents('db.json', $datosform . PHP_EOL, FILE_APPEND);
           //esto es para armar un archivo donde guardar los datos del formulario , el PHP_EOL es para generar el SeekableIterator

           $datosXXX = json_decode($datosform, true);
           var_dump($datosform);

           echo "<br>";

           var_dump($datosXXX);
           // header("location:succes.php");
         }

}
   ?>


   <ul>
     <?php foreach ($errores as $error): ?>
       <li> <?php echo $error ?> </li>
     <?php endforeach; ?>
   </ul>

   <form action="register.php" method='post'>
      <fieldset >
			<legend>Registrate</legend>

			<strong>* campos requeridos</strong><br><br>

			<div class='form-control'>
				<label for='name' >Nombre completo*: </label>
				<input type='text' name='name' id='name' value="<?=$name?>">
			</div>

			<div class='form-control'>
				<label for='email' >Email*:</label>
				<input type='text' name='email' id='email' value="<?=$email?>">
			</div>

			<div class='form-control'>
				<label for='username' >Nombre de usuario*:</label>
				<input type='text' name='username' id='username' value="<?=$username?>">
			</div>

			<div class='form-control'>
				<label for='password'>Contraseña*:</label>
				<input type='password' name='password' id='password' value="<?=$pass?>">
			</div>
      <div class='form-control'>
        <label for="passwd">comprobar contraseña*</label>
        <input type="password" name="rpassword" id="passwd" value="<?=$rpass?>">
      </div>
      <div class="form-control">
        <label for="numero">telefono de contacto*</label>
        <input type="text" name="numero" id="numero" value="<?=$numero?>">
      </div>
      <div class="form-control">
        <label for="direccion">direccion de dominicilio*</label>
        <input type="text" name="direccion" id="direccion" value="<?=$direccion?>">
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
