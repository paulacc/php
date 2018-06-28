<?php

class productoVendible

 {
      private $nombre;
      private $precio;
      private $preparado;

   //cuando mandar parametro. EN el constructor se iniciakizan las variables o atributo
   //el constructor aparece mientras se instancia un objeto
    public function __contruct($nombreProductoaVender){
     $this->preparado='false';
     $this->nombre= $nombreProductoaVender;
    }


       public function preparar(){
         $this->preparado = true;

       }

     public function getNombre(){
       return $this->nombre;
     }

     public function asignarPrecio($precioAAsignar)
     //este valor que te envio asignalo a la variable precio,  el seter debe tener un parametro
     //lo llamo cuando deseo.
      {
           $this->precio= $precioAAsignar;
      }

      public function getPrecio(){
        return $this->precio;

      }



}


  class Sandwich extends ProductoVendible {
  private  $mayonesa;
  private $tostado;

  public function Preparar(){

  }



}

class Ensalda extends ProductoVendible {

}

class Bebida extends ProductoVendible {

}



 ?>
