<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


class Peliculas {
  public static function TraerPeliculas() {

    require 'conexion.php';

    $Busqueda= "SELECT * FROM movies";
    $ConsultaSql= $db->prepare($Busqueda);
    $ConsultaSql->execute();
    $Resultado = $ConsultaSql->fetchAll(PDO::FETCH_ASSOC);

    return  $Resultado;
  }
}


  $pelis = Peliculas::TraerPeliculas();
  var_dump($pelis);
  exit;


 ?>
