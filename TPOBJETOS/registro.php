<?php

$name = '';
$email = '';
$errores = [];


if($_POST){

  $name = trim($_POST['name']);
  $email = trim($_POST['email']);

  header('location: perfil.php');
  


}


 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
    <div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-white mb-4"></h2>
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Registro</h3>
                        </div>
                        <div class="card-body">
                            <form  method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="uname1">Nombre</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="name"  required="">

                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="email" required="" >

                                </div>
                                <div class="form-group">
                                    <label>Constraseña</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" name="pwd" required="" >

                                </div>
                                <div class="form-group">
                                    <label>Repetir Constraseña</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" name="rpwd" required="" >

                                </div>

                                <button type="submit" class="btn btn-primary boton float-right ">Registrar</button>
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
  </div>
  </body>
</html>
