<?php

require_once 'Pelicula.php';

class Peliculas
{

  public static function TraerPeliculas()
  {

    require 'conexion.php';

    $Busqueda = "SELECT * FROM movies";
    $ConsultaSql = $db->prepare($Busqueda);
    $ConsultaSql->execute();
    $Resultado = $ConsultaSql->fetchAll(PDO::FETCH_ASSOC);
    $TodasLasPeliculas = [];

    foreach ($Resultado as $value) {
      $objPelicula = new Pelicula($value["id"], $value["title"], $value["awards"], $value["rating"]);
      $objPelicula->setGenreId($value['genre_id']);

      $TodasLasPeliculas[] = $objPelicula;
    }

    return  $TodasLasPeliculas;
  }

  public static function TraerPeliculasPorId($id)
  {
    // me conecto a la base y busco según el id que me llega
    require 'conexion.php';

    $busqueda = "SELECT * FROM movies WHERE id = {$id}";
    $consultaSql = $db->prepare($busqueda);
    $consultaSql->execute();
    $resultado = $consultaSql->fetch(PDO::FETCH_ASSOC);

    // Verifico si encontramos registros
    if ($resultado) {
      // Si encontramos armo un array de objetos pelicula
      $objPelicula = new Pelicula($resultado["id"], $resultado["title"], $resultado["awards"], $resultado["rating"]);
      $objPelicula->setGenreId($resultado['genre_id']);
    } else {
      // Si no encontramos devuelvo false
      $objPelicula = false;
    }

    return  $objPelicula;
  }

  public static function TraerPeliculasPorTitulo($titulo) {
    // me conecto a la base y busco por título
      // ver de usar like "%%"
      // SELECT * FROM movies_db.movies where title like "%la%";

    // si me llegan resultados devuelvo un array de objetos Pelicula
    // en caso contrario devuelvo false
  }
}


  $prueba = Peliculas::TraerPeliculas();
  if ($prueba) {
    foreach ($prueba as $pelicula) {
?>
  <article>
    <h4><?php echo $pelicula->getTitle(); ?></h4>
    <p>Rating: <?php echo $pelicula->getRating(); ?></p>
    <hr>
  </article>
<?php
    }
  }

?>
