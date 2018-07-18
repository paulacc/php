<?php
  class BaseDeDatos {
      public static function ExisteRegistro($IdABuscar, $NombreTablaABuscar){
          $SQLDeLectura = "select count(*) as cantidad from {$NombreTablaABuscar} where id = {$IdABuscar} ";

          //Ejecuto el SQL que armé contra la base

          //Proceso el único registro que traigo, mirando su campo "Cantidad"

          //Si "Cantidad" vino en cero, es que NO hubo ningún registro
          //para ese Id.  Caso contrario, hubo.

          //En base a que Cantidad sea o no cero, devuelvo true o false
          




      }



  }


?>
