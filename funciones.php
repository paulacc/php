<?php
echo "<hr>";
echo "Ejercicio 1";
echo "<hr>";

$numeroMagico = 34;

     function mayor ($num1,$num2,$num3 = ""){
       return max($num1,$num2,$num3);
     }

     echo mayor(5,15);

echo "<hr>";


    function tabla($base,$limite){
        for($i = $base; $i != $limite; $i++) {
          echo $i.' ';
      };


   }
     return tabla(25,50);




 ?>
