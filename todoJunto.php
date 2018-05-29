<?php
$funcionesEjecutadas = 0;

 include 'funciones.php';
 include 'superficie.php';

echo "<br>";
echo "prueba";
echo "<br>";
echo circulo(3);
echo "<hr>";


 function tresSuperficies($r1,$r2,$r3){
   $sup1 = circulo($r1);
   $sup2 = circulo($r2);
   $sup3 = circulo($r3);
   return mayor($sup1,$sup2,$sup3);

 }
  echo tresSuperficies(1,2,4);
  echo "<hr>";
  echo "se han ejecutado $funcionesEjecutadas funciones";


  

 ?>
