<?php
 require_once 'genero.php';

 class Generos
 {
    public static function TraerGeneros()
    {
     require 'conexion.php';

     $Busqueda = "SELECT * FROM genres";
     $ConsultaSql = $db->prepare($Busqueda);
     $ConsultaSql->execute();
     $Resultado = $ConsultaSql->fetchAll(PDO::FETCH_ASSOC);
     $todosLosGeneros = [];

     foreach ($Resultado as $value) {
       $objGenero = new Genero ($value["id"],$value["name"]);
       $todosLosGeneros [] = $objGenero;
     }

      return $todosLosGeneros;

    }


 }


   $generos = Generos :: TraerGeneros();
   var_dump($generos);

 ?>
