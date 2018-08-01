<?php
 require_once 'usuario.php';







 ?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <body >
    <div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-white mb-4"></h2>
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Iniciar Sesión</h3>
                        </div>
                        <div class="card-body">
                            <form class="form">
                                <div class="form-group">
                                    <label for="uname1">Email</label>
                                    <input type="email" class="form-control form-control-lg rounded-0" name="name" required="">

                                </div>
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" name="pwd" required="" autocomplete="new-password">

                                </div>

                                <button type="submit" class="btn btn-primary boton float-right ">Iniciar Sesión</button>
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
