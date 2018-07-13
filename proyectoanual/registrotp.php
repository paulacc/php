
<?php
 require_once('funcionesregistro.php');



$name = '';
$apellido = '';
$usuario = '';
$dni = '';
$codigo = '';
$telefono = '';
$email = '';


$errores = [];

if($_POST){

  $name = trim($_POST['name']);
  $apellido = trim($_POST['apellido']);
  $usuario = trim($_POST['usuario']);
  $dni = trim($_POST['dni']);
  $codigo = trim($_POST['codigo']);
  $telefono = trim($_POST['telefono']);
  $email = trim($_POST['email']);


          $errores = validar($_POST,'imgperfil');
          //imgperfil pasa a ser $archivo en la funcion de validar.de esa forma toma el nombre?

    if(empty($errores)){

              $errores = guardarIMG('imgperfil');


          if (empty($errores)) {
            //Empty Determina si una variable está vacía
            //Isset Determina si una variable está definida y no es NULL
            //isset puede devuelvor true para variables con valores vacíos
            $user = guardarUser($_POST);
            header('location:index.html');

          }
     }
}
 ?>
<!DOCTYPE html>
<html>

  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Registro</title>
    <style>

      .cuerpo{
        background-color:#F7F9F8;
        color: #F7F9F8;
        font-family: 'Roboto', sans-serif;

      }
      .formulario{
        padding-top: 20px;
        padding-bottom: 20px;
        background-color: #23353C;
        margin-top: 20px;
        margin-bottom: 20px;
        border-radius: 1%;

      }
     .boton{
       background-color: #818043;
     }

     .has-error{
       background-color: red;
     }

     @import url('https://fonts.googleapis.com/css?family=Lato|PT+Sans|Raleway|Roboto');
    </style>
  </head>
  <body class="cuerpo">
    <?php if (!empty($errores)): ?>
      <!-- Si no esta vacia errores -->
      <div class="div-errores alert alert-danger">
        <ul>
          <?php foreach ($errores as $value): ?>
          <li><?=$value?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
   <br>

    <div class="container-fluid d-flex justify-content-center">

      <form method="post" class="formulario col-md-8 " enctype="multipart/form-data">

        <div class="card-header">
            <h3 class="mb-0 text-center">Formulario de Registro</h3>
        </div>
        <br>
      <div class="form-row d-flex justify-content-center ">

       <div class="form-group col-md-4  <?= isset($errores['name']) ? 'has-error' : null ?>">
         <label for="inputNombre">Nombre</label>
         <input type="text" class="form-control" name="name" placeholder="Nombre" value="<?=$name?>">
         <span class="help-block" style="<?= !isset($errores['name']) ? 'display: none;' : ''; ?>">
            <b class="glyphicon glyphicon-exclamation-sign"></b>
            <?= isset($errores['name']) ? $errores['name'] : ''; ?>
          </span>
       </div>
       <div class="form-group col-md-4">
         <label for="inputPassword4">Apellido</label>
         <input type="text" class="form-control" name="apellido" placeholder="Apellido" value="<?=$apellido?>">
       </div>

      <div class="form-row d-flex justify-content-center ">

        <div class="form-group col-md-8">
          <label for="inputDni" class=".col-form-label-sm">Dni</label>
          <input type="numero" class="form-control" name="dni"  placeholder="Dni" value="<?=$dni?>">
        </div>

        <div class="form-group col-md-5">
          <label for="inputtelfono">Telefono</label>
          <input type="numero" class="form-control" name="telefono"  placeholder="Telefono" value="<?=$telefono?>">
        </div>

        <div class="form-group col-md-3">
          <label for="inputCodigo">Codigo de Area</label>
          <input type="numero" class="form-control" name="codigo"  placeholder="Cod Area" value="<?=$codigo?>">
        </div>
      </div>

      <div class="form-group col-md-8">
        <label for="inputPassword4">Usuario</label>
        <input type="text" class="form-control" name="usuario" placeholder="Usuario" value="<?=$usuario?>">
      </div>
            </div>
          <div class="form-row d-flex justify-content-center">
            <div class="form-group col-md-8">
              <label for="InputEmail1">Email</label>
              <input type="email" class="form-control" name="email"  placeholder="Ingresa tu email" value="<?=$email?>">
            </div>


           <div class="form-group col-md-8">
             <label for="Password">Password</label>
             <input type="password" class="form-control" name="pwd" placeholder="Password">
           </div>
           <div class="form-group col-md-8">
             <label for="InputPassword1">Confirmar Password</label>
             <input type="password" class="form-control" name="repwd" placeholder="Password">
           </div>

           <div class="form-group col-md-8">

               <label for="name" class="control-label">Subir imagen Perfil</label>
               <input class="form-control" type="file" name="imgperfil" value="">
               <span class="help-block" style="<?= !isset($errores['imgperfil']) ? 'display: none;' : '' ; ?>">
                 <b class="glyphicon glyphicon-exclamation-sign"></b>
                 <?= isset($errores['imgperfil']) ? $errores['imgperfil'] : '' ;?>
               </span>

           </div>

          </div>

             <div class="form-row d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary boton">Registrar</button>
             </div>
    </form>
  </div>
  </body>
</html>
