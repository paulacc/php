<?php

  class productoVendible {
      protected $nombre;
      protected $precio;
      protected $preparado;
      protected $tiempoPreparacion;

      public function __construct($nombreProductoAVender) {
        $this->preparado = false;
        $this->nombre = $nombreProductoAVender;
      }

      public function asignarPrecio($precioAAsignar) {
        $this->precio = $precioAAsignar;
      }


      public function getNombre() {
        return $this->nombre;
      }
      public function regalar() {
        $this->precio = 0;
      }


      public function preparar() {
        $this->preparado = true;
      }

      public function getPrecio() {
        return $this->precio;
      }

  }


?>
