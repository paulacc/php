<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     <form  method="post">
       <label for="">nombre</label>
       <input type="text" name="nombre" value="">
       <button type="submit" name="button">Enviar</button>
     </form>
  </body>
</html>

<?php


 if ($_POST) {
   setcookie('nombre',$_POST['nombre'],time()+5);
 }
 if (isset($_COOKIE['nombre'])){
   //si existe esta cookie en esta posicion, si existe imprimila
   var_dump($_COOKIE['nombre']);
 }

 if($_POST){
   session_start();
   $_SESSION['nombre'] = $_POST['nombre'];

 }

 ?>
