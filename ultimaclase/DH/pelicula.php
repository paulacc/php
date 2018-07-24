<?php

  class Pelicula {
    private $Id;

    public $titulo;
    public $rating;
    public $actores;

    public function __construct($TituloInicial, $ActoresInicial) {
      require_once 'connect.php';
      try {
    		$sql = "SELECT id, rating FROM movies where title like '{$TituloInicial}'";
    		$query = $db->prepare($sql);
    		$query->execute();
    		$datosPelicula = $query->fetchAll(PDO::FETCH_ASSOC);
    	}
    	catch( PDOException $Exception ) {
    	}

      $this->Id=$datosPelicula[0]['id'];
      $this->titulo=$TituloInicial;
      $this->rating=$datosPelicula[0]['rating'];
      $this->actores=$ActoresInicial;
    }

    public function getId() {
      return $this->Id;
    }
  }
?>
