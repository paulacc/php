<?php

  require_once 'usuario.php';

  class Usuarios
  {


        public static function TraerUsuarios()
        {
             require 'conexion.php';
            $Busqueda= "SELECT * FROM users";
            $Consulta= $db->prepare($Busqueda);
            $Consulta->execute();
            $Resultado = $Consulta->fetchAll(PDO::FETCH_ASSOC);
            $todosLosUsuarios = [];

             foreach ($Resultado as $value) {
               $objUsuario  = new Usuario ($value["name"],$value["email"],'password',$value["id"]);
               $todosLosUsuarios [] = $objUsuario;

             }

            return $todosLosUsuarios;
          }



  }



               $users = Usuarios::TraerUsuarios();
               var_dump($users);
               exit;


 ?>
