<?php
session_start();

if($_POST){
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['password'] = $_POST['password'];
    header('location: perfil2.php');

}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" method="post">
       <label for="">Usuario</label>
       <input type="text" name="usuario" value="">
       <br>
      <label for="">Email</label>
      <input type="text" name="email" value="">
      <br>
      <label for="">Contraseña</label>
      <input type="password" name="password" value="">
      <br>
      <button type="submit" name="button">Ingresar</button>
    </form>
  </body>
</html>
