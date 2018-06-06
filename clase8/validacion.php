<?php
 function validar($data){

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $pais = trim($_POST['pais']);
    $pass = trim($_POST['pass']);
    $rpass = trim($_POST['pass']);

  if($name == '');{
    $errores['name'] = 'Por favor completar el nombre';
  }
  if($email == ''){
    $errores['email'] = 'Por favor completar el email ';
  }elseif(!filter_var)


 }

 ?>
