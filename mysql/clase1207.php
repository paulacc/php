<?php
 public $rating:

   public function_construct($Tituloinicial){
     require_once 'conexion.php';

    try{
       $sql = "SELECT id, rating FROM movies where title like '$Tituloinicial'";
       $query = $db->prepare($sql);
       $query->execute();
       $datospelicula = $query->fetchAll(PDO::FETCH_ASSOC);
       //fetAll trae todo
    }catch(PDOException $Exception){

    }




   }

 ?>
