<?php

class Genero
{
  private $id;
  private $name;


  public function __construct($id, $name){
    $this->id=$id;
    $this->name=$name;
  }

//Getters
  public function getId($id){
    return $this->id;
  }

  public function getName($name){
    return $this->$name;
  }


}

 ?>
