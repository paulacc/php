<?php
echo "<hr>";
echo "Funcion numero mayor";
echo "<hr>";

$numeroMagico = 40;

   function mayor ($num1,$num2,$num3 = null){
     if($num3 == null || !is_numeric($num3)){
        global $numeroMagico;
        $num3 = $numeroMagico;
      }
       return max($num1,$num2,$num3);

     }

     echo mayor(5,15,"k");


echo "<hr>";
echo "Funcion tabla";
echo "<hr>";

        function tabla($base,$limite){
          global $numeroMagico;
          if($limite == null || !is_numeric($limite) ){
             $limite = $numeroMagico;
          }
          if($base == null || !is_numeric($base) ){
             $base = $numeroMagico;
          }

          $array = [];
            for($i = $base; $i != $limite; $i++) {
              $array[] = $i;
          }
          return $array;
        }
          $algo = tabla("K",60);
          foreach ($algo as $value) {
            echo "$value <br>";
          }









 ?>
