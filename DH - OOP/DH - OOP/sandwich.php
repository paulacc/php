<?php


  class sandwich extends productoVendible {
      private $mayonesa;
      private $tostado;

      public function seTosta() {
        return $this->tostado;
      }

      public function __construct ($nombreProductoAVender, $mayonesa, $tostado) {
        $this->preparado = false;
        $this->nombre = $nombreProductoAVender;
        $this->mayonesa = $mayonesa;
        $this->tostado = $tostado;
      }

      public function llevaMayonesa() {
        return $this->mayonesa;
      }

  }

?>
