<?php

function validar($info){

  if(empty($name))
    {
      $errores['name'] = "El campo nombre es obligatorio";
   }elseif (!ctype_alpha($name)) {
      $errores['name'] = "El campo nombre solo debe contener letras";
   }
   if(empty($apellido)){
     $errores['apellido'] = "El campo apellido es obligatorio";

  }elseif(!ctype_alpha($apellido)){
     $errores['apellido'] = "El campo apellido sólo debe contener letras";
  }
   if(empty($dni)){
     $errores['dni'] = "El campo dni es obligatorio";
   }elseif(!is_numeric($dni)){
     $errores['dni'] = "El campo dni solo debe contener numeros";
   }elseif(strlen($dni) < 6){
     $errores['dni'] = "El campo dni debe contener como minimo 6 digitos, verificar el numero ingresado";
   }
   if($email == ''){
    $errores['email']= "El campo email es obligatorio";
   // }elseif(substr_count($email, "@") != 1) {
   }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     $errores['email'] = 'El correo no es válido" <br>';
  }elseif(verificarEmail($email)){
     $errores = 'Este email ya se encuentra registrado';
  }
  if(empty($telefono)){
   $errores['telefono']= "El campo telefono es obligatorio";
 }elseif(!is_numeric($telefono)){
   $errores['numero'] = 'El telefono debe incluir solo numeros';
 }elseif(strlen($telefono) < 6){
     $errores['numero'] = 'El telefono debe incluir como minimo 6 digitos';
  }
  if(empty($codigo)){
    $errores['codigo']= "El codigo de area es obligatorio";
  }elseif(!is_numeric($codigo)){
    $errores['codigo']= "El codigo de ares sólo debe incluir numeros";
  }elseif(strlen($codigo)< 1){
    $errores['codigo'] = "El codigo de area debe tener como minimo dos digitos";
  }
   if(empty($pwd)){
     $errores['pwd'] = "Debes ingresar una contraseña ";
  }elseif ((strlen($pass) < 5 )) {
     $errores['pwd'] = "La contraseña debe tener más de 5 caracteres ";
  }
  if($pwd!= $rpwd){
    $errores['rpwd']= "las contraseñas deben coincidir ";
  }
  if(empty($direccion)){
     $errores['direccion'] = "la direccion es obligatoria";
  }
           return $errores;
}



  function crearUser($info){

    $user = [
      'name' => $info['name'],
      'apellido' => $info['apellido'],
      'dni' => $info['dni'],
      'pwd' => password_hash($info['pwd'], PASSWORD_DEFAULT),
      'email' => $info['email'],
      'codigo' => $info['codigo'],
      'telefono'=> $info['telefono'],
      'colegio' => $info['colegio'],
      'nivel' => $info ['nivel'],
      'grado' => $info ['grado'],

    ];
        return $user;
  }


 function guardarUser($info){
    $user = crearUser($info);
    $userJSON = json_encode($user);

    file_put_contents('usuarios.json',$userJSON . PHP_EOL, FILE_APPEND);


 }
 ?>
