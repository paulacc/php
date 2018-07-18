<?php

  class Peliculas {

    public static $Cantidad;
    public static $TodasLasPeliculas;

    public static function ObtenerTodas() {

      //Me fijo si la lista había sido obtenida previamente, para no hacerlo de nuevo.
      if (!isset(self::$TodasLasPeliculas)) {

        //Me conecto a la base de datos
        require_once("connect.php");

        //Ejecuto la lectura
        $CadenaDeBusqueda = "SELECT id, title, rating FROM movies";
        $ConsultaALaBase = $db->prepare($CadenaDeBusqueda);
        $ConsultaALaBase->execute();

        //Declaro el array de objetos Pelicula
        $PeliculasADevolver=array();

        //Recorro cada registro que obtuve
        while ($UnRegistro = $ConsultaALaBase->fetch(PDO::FETCH_ASSOC)) {

          //Ejecuto la lectura de los actores de esa pelicula
          $BusquedaActores = "SELECT actors.first_name as primerNombre,
          actors.last_name as apellido
          from actors inner join actor_movie
          on actor_movie.actor_id=actors.id
          where actor_movie.movie_id= :IdDeLaPelicula";
          $ConsultaActores = $db->prepare($BusquedaActores);
          $ConsultaActores->bindParam(':IdDeLaPelicula', $UnRegistro['id'], PDO::PARAM_INT);
          $ConsultaActores->execute();

          //Declaro el array de nombres de actores
          $Actores=array();

          //Recorro cada registro que obtuve
          while ($UnRegistroActor = $ConsultaActores->fetch(PDO::FETCH_ASSOC)) {

            //Agrego el nombre de un actor al atributo
            $Actores[] =  "El nombre es: {$UnRegistroActor['primerNombre']} y su apellido es: {$UnRegistroActor['apellido']}";
          }

          //Instancio un objeto de tipo Pelicula
          $UnaPeli = new pelicula($UnRegistro['title'], $Actores);

          //Agrego el objeto Pelicula al array
          $PeliculasADevolver[] = $UnaPeli;

        }

        //Guardo las variables globales de la clase de entidad, para no tener que volverlas a llenar
        self::$Cantidad=count($PeliculasADevolver);
        self::$TodasLasPeliculas = $PeliculasADevolver;

      } else {
        //La lista ya había sido llenada con anterioridad, no la vuelvo a llenar
        $PeliculasADevolver = self::$TodasLasPeliculas;
      }

      //Devuelvo el array ya rellenado
      return $PeliculasADevolver;

    }

    public static function getLaDeMejorRating() {
      //Si la lista no había sido llenada, la lleno ahora.
      if (!isset(self::$TodasLasPeliculas)) {
        self::ObtenerTodas();
      }

      //Me guardo, como película de mejor rating, a la primera del array
      $PeliDeMejorRating=self::$TodasLasPeliculas[0];

      //Recorro todos los elementos del array para ver si hay alguna con mejor rating
      foreach (self::$TodasLasPeliculas as $UnaPeliAAnalizar) {
        if ($UnaPeliAAnalizar->rating > $PeliDeMejorRating->rating) {
          $PeliDeMejorRating = $UnaPeliAAnalizar;
        }
      }

      return $PeliDeMejorRating;
    }
  }

?>
