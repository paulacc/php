<?php

if($_POST){
  if ($_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
      $name = $_FILES['avatar']['name'];
      //guardo el Nombre de la foto como me lo esta subiendo
      $ext = pathinfo($name, PATHINFO_EXTENSION);
      // con pathinfo con la constante me guarda la extension en $ext
      $archivo = $_FILES['avatar']['tmp_name'];
      //me guardo el archivo fisico y la clave temporal name
      $direccion = dirname(_FILE_);
      //me dice donde estoy parado sirve para que en vez de decir que lo guardare en upload puedo hacer una concatenacion
      //
      
   if($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png'){

   move_uploaded_file($archivo,'upload/'.$_POST['name'].'.'.$ext);

   }else{
     echo 'la extension no es valida';
   }

  }else {
    echo ' por favor subir archivo';
  }
}
?>
