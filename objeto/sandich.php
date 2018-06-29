<?php

class Sandwich extends productoVendible {
private  $mayonesa;
private $tostado;

public function Preparar(){

}

public function __contruct($nombreProductoaVender,$mayonesa,$tostado){
 $this->preparado='false';
 $this->nombre= $nombreProductoaVender;
 $this->mayonesa = $mayonesa;
 $this->tostado= $tostado;
}


//esto es un Get
public function llevaMayonesa(){
  return $this->mayonesa;
}


 public function seTosta(){
   
 }



}



 ?>
