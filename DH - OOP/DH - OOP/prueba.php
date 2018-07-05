<?php

  require_once ('productoVendible.php');
  require_once ('sandwich.php');

  $miPrimerPlato = new sandwich("Big Mac", true, false);
  $miPrimerPlato->asignarPrecio(100);

  $miSegundoPlato = new sandwich("Staker doble", true, true);
  $miSegundoPlato->asignarPrecio(125);

  $miTercerPlato = new sandwich("Pebete de jamón y queso", false, true);
  $miTercerPlato->asignarPrecio(75);

  $todoLoQueVoyAMorfar[] = $miPrimerPlato;
  $todoLoQueVoyAMorfar[] = $miSegundoPlato;
  $todoLoQueVoyAMorfar[] = $miTercerPlato;

  $totalGastado=0;
  foreach ($todoLoQueVoyAMorfar as $unPlato) {
    echo "Voy a comer un {$unPlato->getNombre()} que cuesta {$unPlato->getPrecio()} <br>";
    $totalGastado = $totalGastado + $unPlato->getPrecio();
  }

  $cantidadPlatos = count($todoLoQueVoyAMorfar);
  echo "Me gasté {$totalGastado} en {$cantidadPlatos} platos";


?>
