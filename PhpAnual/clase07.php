<?php
$usuarios = file_get_contents('usuarios.json');

$usuariosArrayJSON = explode(PHP_EOL,$usuarios);


$usuariosPHP = [];
foreach ($usuariosArrayJSON as $usuario) {
    $usuariosPHP[] = json_decode($usuario,true);
}

var_dump($usuariosPHP);




 ?>
