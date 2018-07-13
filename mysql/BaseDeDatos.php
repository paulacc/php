<?php

require_once 'conexion.php';

class BaseDeDatos{

    public static function ExisteRegistro($IdABuscar,$NombreTablaABuscar){

     $SQLdelectura = "SELECT * from {$NombreTablaABuscar} where id = {$IdABuscar}";

         try{
           $host = 'mysql:host=127.0.0.1;dbname=movies_db;port=3306';
           $db_user = 'paula';
           $db_pass = 'castex';
           $opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
           $db = new PDO($host,$db_user,$db_pass,$opt);
            $query = $db->prepare($SQLdelectura);
            $query->execute();
            $resultado = $query->fetchAll(PDO::FETCH_ASSOC);

         }catch(PDOException $Exception){
           return $Exception->getMessage();
         }
         return $resultado;
    }

}

var_dump(BaseDeDatos::ExisteRegistro(4,'movies'));
