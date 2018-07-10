<?php

function validar($info){

  if(empty($name))
    {
      $errores['name'] = "El campo nombre es obligatorio";
   }elseif (!ctype_alpha($name)) {
      $errores['name'] = "El campo nombre solo debe contener letras";
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
 }elseif(strlen($numero) < 6){
     $errores['numero'] = 'El telefono debe incluir como minimo 6 digitos';
  }
   if(empty($pwd)){
     $errores['pwd'] = "Debes ingresar una contraseña ";
  }elseif ((strlen($pass) < 5 )) {
     $errores['pwd'] = "La contraseña debe tener mas de 5 caracteres ";
  }
  if($pwd!= $rpwd){
    $errores['rpwd']= "las contraseñas deben coincidir ";
  }
  if(empty($direccion)){
     $errores['direccion'] = "la direccion es obligatoria";
  }


}


 ?>
