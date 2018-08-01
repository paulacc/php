<?php
      class Pelicula{
         private $id;
         private $title;
         private $genreId;
         private $awards;
         private $rating;


        public function __construct($id, $title, $awards, $rating){
          $this->id = $id;
          $this->title = $title;
          $this->awards = $awards;
          $this->rating = $rating;
        }

        // Getters
        public function getId() {
          return $this->id;
        }

         public function getTitle(){
           return $this->title;
         }

         public function getGenero(){
          return $this->genero;
         }

         public function getAwards(){
           return $this->awards;
         }

         public function getRating(){
           return $this->rating;
         }

         // Setters
         public function setGenreId($genreId) {
           $this->genreId = $genreId;
         }

         // Other methods
         public function Guardar(){

          try {
            $sql = "INSERT INTO `movies` 	(`id`,`title`, `rating`, `awards`)";
            $query = $db->prepare($sql);
            $query->execute();
            //$datosmovies = $query->fetchAll(PDO::FETCH_ASSOC);
          }
          catch( PDOException $Exception ) {
          }


        }





      }



 ?>
