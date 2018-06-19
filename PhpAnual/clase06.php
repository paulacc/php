<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>



        <!-- <?php if (true): ?>
            <a href="<?php echo "perfil.php?id=".$usuario['id'] ?>"> <?php echo $usuario['nombre'] ?> </a>
        <?php else: ?>
            <a href="logueate">login</a>
            <a href="register">registrate</a>
        <?php endif; ?> -->

        <?php
        $errores = [];
        $name = 'input vacio';
        $lastname = '';
        $email = '';


        if ($_POST) {
            $name = trim($_POST['name']);
            $lastname = trim($_POST['lastname']);
            $email = trim($_POST['email']);
            $pass = trim($_POST['pass']);
            $rpass = trim($_POST['passr']);

            if ($name == '') {
                $errores['name'] = 'Completa tu nombre';
            }
            if ($lastname == '') {
                $errores['lastname'] = 'Completa tu apellido';
            }
            if ($email == '') {
                $errores['email'] = 'Completa tu email';
            }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
                $errores['email'] = 'Completa tu email, con un formato valido';
            }
            if ($rpass == '' || $pass == '' ) {
                $errores['pass'] = 'Completa tus password';
            }elseif ($rpass !== $pass) {
                $errores['pass'] = 'Tus contraseñas no coinciden';
            }

            if (count($errores) == 0) {
                $usuario = [
                    'name' => $name,
                    'lastname' => $lastname,
                    'email' => $email,
                    'pass' => password_hash($pass, PASSWORD_DEFAULT),
                ];

                $usuarioJSON = json_encode($usuario);

                file_put_contents('usuarios.json',$usuarioJSON.PHP_EOL,FILE_APPEND);


            }

        }
         ?>

        <form style="text-align:center" action="" method="post">
            <label for="name">Nombre:</label>
            <input type="text" name="name" value="<?=$name?>" id="name" >
            <br>
            <label for="lastname">Apellido:</label>
            <input type="text" name="lastname" value="<?=$lastname?>" id="lastname">
            <br>
            <label for="email">Email:</label>
            <input type="text" name="email" value="<?=$email?>" id="email" placeholder="ejemplo@mail.com">
            <br>
            <label for="pass">Pass:</label>
            <input type="text" name="pass" value="" id="pass">
            <br>
            <label for="passr">Repeat Pass:</label>
            <input type="text" name="passr" value="" id="passr">
            <br>
            <button type="submit">Registrarse</button>
            <?php if (!isset($_GET['versionCorta'])):?>
                <label for="passr">version larga</label>
                <input type="text" name="passr" value="" id="passr">
                <br>
            <?php endif; ?>
        </form>

        <?php if (!empty($errores)): ?>
            <ul class="">
            <?php foreach ($errores as $key => $value): ?>
                <li><?=$value?></li>
            <?php endforeach; ?>
            </ul>
        <?php endif; ?>



    </body>
</html>
