<?php

function validar($data){
    $errores = [];
    $name = trim($data['name']);
    $email = trim($data['email']);
    $pais = trim($data['pais']);
    $pass = trim($data['pass']);
    $rpass = trim($data['rpass']);

    if ($name == '') {
        $errores['name'] = 'Por favor completa el nombre';
    }
    if ($email == '') {
        $errores['email'] = 'Por favor completa el email';
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores['email'] = 'Por favor completa el email con un formato valido';
    }elseif (existeEmail($email)) {
        $errores['email'] = 'che el email ya existe';
    }
    if ($pais == '') {
        $errores['pais'] = 'Por favor completa el pais';
    }
    if ($pass == '' || $rpass = '') {
        $errores['pass'] = 'Por favor completa tus password';
    }
    // elseif ($pass !== $rpass) {
    //     $errores['pass'] = 'Tus contraseñas no coinciden';
    // }

    return $errores;
}

function crearArrayUsuario($data){
    $usuario = [
        'id' => traerUltimoID(),
        'name' => $data['name'],
        'email' => $data['email'],
        'pais' => $data['pais'],
        'pass' => password_hash($data['pass'], PASSWORD_DEFAULT),
    ];

    return $usuario;
}

function guardarUsuario($usuario){
    $usuarioJSON = json_encode($usuario);

    file_put_contents('usuarios.json',$usuarioJSON.PHP_EOL, FILE_APPEND);
}

function traerTodos(){
    $usuariosJSON = file_get_contents('usuarios.json');

    $usuariosArrayJSON = explode(PHP_EOL, $usuariosJSON);
    $usuariosPHP = [];
    foreach ($usuariosArrayJSON as $value) {
        $usuariosPHP[] = json_decode($value, true);
    }

    array_pop($usuariosPHP);

    return $usuariosPHP;
}

function existeEmail($email){
    $usuarios = traerTodos();

    foreach ($usuarios as $unUsuario) {
        if ($email == $unUsuario['email']) {
            return $unUsuario;
        }

    }
    return false;

}

function traerUltimoID(){
    $usuarios = traerTodos();

    if (empty($usuarios)) {
        return 1;
    }

    $ultimoUsuario = array_pop($usuarios);

    $ultimoID = $ultimoUsuario['id'];

    return $ultimoID + 1;


}

?>
