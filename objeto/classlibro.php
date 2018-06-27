
<?php

class Libro
{

 private $titulo;
 private $autor;
 private $genero;
 private $generospermitidos = ['ficcion','novela','politicos','poesia','drama'];


 public function setTitulo($TituloAsignar)
   {
        $this->titulo= $TituloAsignar;
   }

 public function getTitulo(){
   return $this->titulo;

 }

 public function setAutor($AutorAsignar){
   $this->autor= $AutorAsignar;

 }

 public function getAutor(){
   return $this->autor;

 }

 public function setGenero($GeneroAsignar){

//uso el this genero porque es un atributo de la clase
   foreach ($this->generospermitidos as $value) {
    if($value == $GeneroAsignar){
       $this->genero = $GeneroAsignar;
       return;

    }
    else{
      "echo el genero no es valido";
    }
   }




 }

 public function getGenero(){
   return $this->genero;

 }





}


?>
