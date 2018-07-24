<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'Pelicula.php';

class Peliculas {
  public static function TraerPeliculas() {

    require 'conexion.php';

    $Busqueda= "SELECT * FROM movies";
    $ConsultaSql= $db->prepare($Busqueda);
    $ConsultaSql->execute();
    $Resultado = $ConsultaSql->fetchAll(PDO::FETCH_ASSOC);
    $TodasLasPeliculas =[];

    foreach ($Resultado as $value) {
      $pelicula = new Pelicula($value["title"],$value["awards"])
      $TodasLasPeliculas[] = $pelicula;
    }

    return  $TodasLasPeliculas;
  }
}


  $pelis = Peliculas::TraerPeliculas();
  var_dump($pelis);
  exit;



 ?>
