<?php

function guardarAvatar(){
 if($_POST){
   if ($_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
       $name = $_FILES['avatar']['name'];
       //guardo el Nombre de la foto como me lo esta subiendo
       $ext = pathinfo($name, PATHINFO_EXTENSION);
       // con pathinfo con la constante me guarda la extension en $ext
       $archivo = $_FILES['avatar']['tmp_name'];
       //me guardo el archivo fisico y la clave temporal name

      move_uploaded_file($archivo,'upload/'.$_POST['nombre'].'.'.$ext);
                                      //el post indica nombre de la persona que se registra en el label nombre
   }else {
     echo ' por favor subir archivo';
   }
 }
}


 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class=""  method="post" enctype="multipart/form-data" >

     <label for="">Nombre</label>
        <input type="text" name="nombre" value="">
     <br>


      <br>
      <label for=""> subir avatar</label>
      <input type="file" name="avatar" value="">
      <br>
      <br>
      <button type="submit" name="button">Enviar</button>

    </form>
  </body>
</html>
