<?php
 require 'conexion.php';

 class Peliculas{
   public static function TraerPeliculas(){

     $Busqueda= "SELECT * FROM movies" ;
     $ConsultaSql= $db->prepare($Busqueda);
     $ConsultaSql->execute();
     $Resultado = $Busqueda->fetchAll(PDO::FETCH_ASSOC);

       var_dump($Resultado);


   }

 }


 //$query = $db->query('SELECT * FROM genres');
 //$genres = $query->fetchAll(PDO::FETCH_ASSOC);
//var_dump($genres);


 ?>
