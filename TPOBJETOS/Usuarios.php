<?php


  class Usuarios{
        require_once 'conexion.php';

        public static function TraerUsuarios(){

            $Busqueda= "SELECT * FROM users";
            $Consulta= $db->prepare($Busqueda);
            $Consulta->execute();
            $Resultado = $Consulta->fetchAll(PDO::FETCH_ASSOC);
          



             }
             $users = Usuarios::TraerUsuarios();
             var_dump($users);
             exit;

           }

 ?>
