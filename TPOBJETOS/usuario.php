<?php

 class Usuario{
     public function CrearUsuario($info){
       $usuario = [

         'name' => $info['name'],
         'email' => $info['email'],
         'pass' => password_hash($info['pass'], PASSWORD_DEFAULT),
       ];

        return $usuario;


     }
?>
