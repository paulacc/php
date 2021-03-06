<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Registro</title>
    <style>

      .cuerpo{
        background-color:#73A098;
        color: #2D3731;
        font-family: 'Roboto', sans-serif;
      }

      .formulario{
        padding-top: 20px;
        padding-bottom: 20px;
        background-color:  #FBFAFA;
        margin-top: 20px;
        margin-bottom: 20px;
        border-radius: 1%;

      }
     .boton{
       background-color: #2E334B;
     }

     @import url('https://fonts.googleapis.com/css?family=Lato|PT+Sans|Raleway|Roboto');
    </style>
  </head>

  <?php
    require_once('header.html');
  ?>

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
         <input type="email" class="form-control" id="nombre" placeholder="Email">
       </div>
       <div class="form-group col-md-4">
         <label for="inputPassword4">Apellido</label>
         <input type="password" class="form-control" id="apellido" placeholder="Apellido">
       </div>

      <div class="form-row d-flex justify-content-center ">
      </div>
        <div class="form-group col-md-8">
          <label for="inputDni" class=".col-form-label-sm">Dni</label>
          <input type="numero" class="form-control" id="InputDni"  placeholder="Dni">
        </div>

        <div class="form-group col-md-8">
          <label for="inputtelfono">Telefono</label>
          <input type="email" class="form-control" id="Inputelefono"  placeholder="Telefono">
        </div>

      </div>
        <div class="form-row d-flex justify-content-center">

           <div class="form-group col-md-4">
             <label for="inputtelfono">Direccion</label>
             <input type="text" class="form-control" id="InputDireccion"  placeholder="Direccion">
           </div>

           <div class="form-group col-md-4">
             <label for="Select1">Provincia</label>
             <select class="custom-select" id="colegio">
            <option value="">Buenos Aires</option>
            <option value="">Catamarca</option>
            <option value="">Chaco</option>
            <option value="">Chubut</option>
            <option value="">Corrientes</option>
            <option value="">Entre Ríos</option>
            <option value="">Formosa</option>
            <option value="">Jujuy</option>
            <option value="">La Pampa</option>
            <option value="">La Rioja</option>
            <option value="">Mendoza</option>
            <option value="">Neuquén</option>
            <option value="">Río Negro</option>
            <option value="">Salta</option>
            <option value="">San Juan	</option>
            <option value="">San Luis</option>
            <option value="">Santa Cruz	</option>
            <option value="">Santa Fe</option>
            <option value="">Santiago del Estero</option>
            <option value="">Tierra del Fuego</option>
            <option value="">Tucumán</option>

        </select>


           </div>

        </div>

          <div class="form-row d-flex justify-content-center">
            <div class="form-group col-md-8">
              <label for="InputEmail1">Email</label>
              <input type="email" class="form-control" id="InputEmail1"  placeholder="Ingresa tu email">
            </div>
            <div class="form-group col-md-8">
              <label for="InputEmail1">Usuario</label>
              <input type="text" class="form-control" id="InputUser"  placeholder="Ingresa tu Usuario">
            </div>


           <div class="form-group col-md-8">
             <label for="InputPassword1">Password</label>
             <input type="password" class="form-control" id="password" placeholder="Password">
           </div>

           <div class="form-group col-md-8">
             <label for="Select1">Colegio</label>
             <select class="custom-select" id="colegio">
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
             <select class="custom-select" id="nivel">
               <option>Primario</option>
               <option>Secundario</option>
             </select>
           </div>

           <div class="form-group col-md-8">
             <label for="exampleSelect1">Grado</label>
             <select class="custom-select" id="grado">
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

  <?php
    require_once('footer.html');
  ?>

</html>
