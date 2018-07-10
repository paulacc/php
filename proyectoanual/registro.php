
<?php
 require_once('funcionesregistro.php');

$provincias = ['Buenos Aires','Catamarca','Chaco','Chubut','Corrientes','Entre Rios','Formosa','Jujuy','La Pampa','La Rioja','Mendoza','Neuquen','Rio Negro','Salta','San Juan','San Luis','Santa Fe','Santiago del Estero','Tierra del Fuego','Tucuman'];
$escuelas = ['LaSalle','Colegio Palermo Chico','Colegio Mariano Moreno','Instituto Alberdi','Colegio Juana de Arco','Colegio Los Robles','Cangallo Schule','Colegio Rey Fahd'];
$nivel = ['Primaria','Secundario'];
$gradopri = ['1ºGrado','2ºGrado','3ºGrado','4ºGrado','5ºGrado','6ºGrado','7°Grado'];
$gradosec = ['1ºGrado','2ºGrado','3ºGrado','4ºGrado','5°Grado'];



$name = '';
$apellido = '';
$dni = '';
$codigo = '';
$telefono = '';
$direccion = '';
$email = '';


$errores = [];

if($_POST){

  $name = trim($_POST['name']);
  $apellido = trim($_POST['apellido']);
  $dni = trim($_POST['dni']);
  $telefono = trim($_POST['telefono']);
  $codigo = trim($_POST['codigo']);
  $direccion = trim($_POST['direccion']);
  $email = trim($_POST['email']);



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

     @import url('https://fonts.googleapis.com/css?family=Lato|PT+Sans|Raleway|Roboto');
    </style>
  </head>
  <body class="cuerpo">

   <br>




    <div class="container-fluid d-flex justify-content-center">

      <form class="formulario col-md-8 ">

        <div class="card-header">
            <h3 class="mb-0 text-center">Formulario de Registro</h3>
        </div>
        <br>
      <div class="form-row d-flex justify-content-center ">

       <div class="form-group col-md-4">
         <label for="inputNombre">Nombre</label>
         <input type="email" class="form-control" name="nombre" placeholder="Email">
       </div>
       <div class="form-group col-md-4">
         <label for="inputPassword4">Apellido</label>
         <input type="password" class="form-control" name="apellido" placeholder="Apellido">
       </div>

      <div class="form-row d-flex justify-content-center ">
      </div>
        <div class="form-group col-md-8">
          <label for="inputDni" class=".col-form-label-sm">Dni</label>
          <input type="numero" class="form-control" name="dni"  placeholder="Dni">
        </div>

        <div class="form-group col-md-5">
          <label for="inputtelfono">Telefono</label>
          <input type="email" class="form-control" name="telefono"  placeholder="Telefono">
        </div>

        <div class="form-group col-md-3">
          <label for="inputtelfono">Codigo de Area</label>
          <input type="email" class="form-control" name="codigo"  placeholder="Cod Area">
        </div>
      </div>
        <div class="form-row d-flex justify-content-center">

           <div class="form-group col-md-4">
             <label for="inputtelfono">Direccion</label>
             <input type="text" class="form-control" name="direccion"  placeholder="Direccion">
           </div>

           <div class="form-group col-md-4">
             <label for="Select1">Provincia</label>
             <select class="custom-select" name="colegio">
               <option value="">Buenos Aires</option>
               <option value=""> Catamarca</option>
               <option value="">Chaco</option>
              <option value="">Chubut</option>
              <option value="">Corrientes</option>
              <option value="">Entre Ríos</option>
              <option value="">Formosa</option>
             <option value="">Jujuy</option>
             <option value="">La Pampa</option>
             <option value="">  La Rioja</option>
             <option value="">Mendoza</option>
             <option value="">Neuquén</option>
             <option value="">Río Negro</option>
             <option value="">Salta</option>
             <option value="">   San Juan	</option>
             <option value=""> San Luis</option>
             <option value="">  Santa Cruz	</option>
             <option value="">Santa Fe</option>
             <option value="">Santiago del Estero</option>
                <option value=""> Tierra del Fuego</option>
                <option value="">Tucumán</option>

             </select>


           </div>

        </div>

          <div class="form-row d-flex justify-content-center">
            <div class="form-group col-md-8">
              <label for="InputEmail1">Email</label>
              <input type="email" class="form-control" name="email"  placeholder="Ingresa tu email">
            </div>


           <div class="form-group col-md-8">
             <label for="InputPassword1">Password</label>
             <input type="password" class="form-control" name="pwd" placeholder="Password">
           </div>
           <div class="form-group col-md-8">
             <label for="InputPassword1">Confirmar Password</label>
             <input type="password" class="form-control" name="repwd" placeholder="Password">
           </div>


           <div class="form-group col-md-8">
             <label for="Select1">Colegio</label>
             <select class="custom-select" name="colegio">
               <option>LaSalle</option>
               <option>Colegio Palermo Chico</option>
               <option>Colegio Mariano Moreno</option>
               <option>Instituto Alberdi</option>
               <option>Colegio Juana de Arco</option>
               <option>Colegio Los Robles</option>
               <option>Cangallo Schule</option>
               <option>Colegio Rey Fahd</option>
             </select>
           </div>

           <div class="form-group col-md-8">
             <label for="exampleSelect1">Nivel</label>
             <select class="custom-select" name="nivel">
               <option>Primario</option>
               <option>Secundario</option>
             </select>
           </div>

           <div class="form-group col-md-8">
             <label for="exampleSelect1">Grado</label>
             <select class="custom-select" name="grado">
               <option>1ºGrado</option>
               <option>2ºGrado</option>
               <option>3ºGrado</option>
               <option>4ºGrado</option>
               <option>5ºGrado</option>
               <option>6ºGrado</option>
             </select>
           </div>


          </div>


             <div class="form-row d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary boton">Registrar</button>
             </div>
    </form>
  </div>
  </body>
</html>
