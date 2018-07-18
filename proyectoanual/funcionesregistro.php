<?php

  function validar($info){

      $nombre = trim($info['name']);
      $apellido = trim($info['apellido']);
      $usuario = trim($info['usuario']);
      $dni = trim($info['dni']);
      $codigo = trim($info['codigo']);
      $telefono = trim($info['telefono']);
      $email = trim($info['email']);
      $pwd = trim($info['pwd']);
      $rpwd = trim($info['repwd']);

     $errores = [];
            if(empty($nombre)){
                $errores['name'] = "El campo nombre es obligatorio";
             }elseif (!ctype_alpha($nombre)) {
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
            }
            // elseif(verificarEmail($email)){
            //    $errores = 'Este email ya se encuentra registrado';
            // }
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
             if(empty($pwd) ){
               $errores['pwd'] = "Debes ingresar una contraseña ";
            }elseif ((strlen($pwd) < 5 )) {
               $errores['pwd'] = "La contraseña debe tener más de 5 caracteres ";
            }
            if($pwd!= $rpwd){
              $errores['rpwd']= "las contraseñas deben coincidir ";
            }
            if(empty($usuario)){
               $errores['usuario'] = "El usuario es obligatorio";
            }if($_FILES['imgperfil']['error'] != UPLOAD_ERR_OK){
              //si no hay imagen entonces
              $errores['usuario'] = "Por favor subir foto de perfil";
            }else{
              $ext = strtolower(pathinfo($_FILES['imgperfil']['name'], PATHINFO_EXTENSION));
              //strtolower — Convierte una cadena a minúsculas , esto por que?
              //ext obtener la extension del archivo
                  if($ext != 'jpg' && $ext != 'png' && $ext != 'jpg'){
                  $errores ['imgperfil'] = "Los formatos permitidos son JPG, PNG , JPEG";
                  }
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
              'foto' => 'images/' . $info['email'] . '.' . pathinfo($_FILES['imgperfil']['name'], PATHINFO_EXTENSION)
            ];
              return $user;
          }


            function guardarUser($info){
            $user = crearUser($info);
            $userJSON = json_encode($user);

            file_put_contents('usuarios.json',$userJSON . PHP_EOL, FILE_APPEND);

          }

          function guardarIMG(){
                 $errores = [];
                 if ($_FILES['imgperfil']['error'] == UPLOAD_ERR_OK) {
                   // 1 Capturo el nombre de la imagen, para obtener la extensión
                   $nombrearchivo = $_FILES['imgperfil']['name'];

                   // Obtengo la extensión de la imagen
                   $ext = pathinfo($nombrearchivo, PATHINFO_EXTENSION);
                   // Capturo el archivo temporal
                   $archivoFisico = $_FILES['imgperfil']['tmp_name'];
                   //tp_name -El nombre temporal del fichero en el cual se almacena el fichero subido en el servidor.
                   // Pregunto si la extensión es la deseada
                   if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png') {
                     // Armo la ruta donde queda gurdada la imagen
                   $directorioactual = dirname(__FILE__);

                   $rutaFinalConNombre = $directorioactual . '/images/' . $_POST['email'] . '.' . $ext;

                   // Subo la imagen definitivamente
                    move_uploaded_file($archivoFisico, $rutaFinalConNombre);
                    }
                     else {
                       $errores['imgperfil'] = 'El formato tiene que ser JPG, JPEG, PNG o GIF';
                     }
                     } else {
                       // Genero error si no se puede subir
                       $errores['imgperfil'] = 'Por favor subir imagen de perfil';
                     }

                  return $errores;

                  }


               function traerRegistros(){
                   $traerUsuarios = file_get_contents('usuarios.json');
                   //obtengo datos del Json y armo array
                   $arrayRegistros = explode(PHP_EOL,$traerUsuarios);

                   array_pop($arrayRegistros);

                   $totalUsuarios = [];

                   foreach ($totalUsuarios as $usuario) {
                     $totalUsuarios [] = json_decode($usuario,true);
                   }
                    return $totalUsuarios;
               }


 ?>
