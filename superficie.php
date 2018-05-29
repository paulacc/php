
    <?php
      function triangulo ($base,$altura){
        return ($base * $altura) /2;
      }

       echo "<br>";
       echo triangulo (6,4);
       echo "<br>";


       function rectangulo($base,$altura){
         return ($base * $altura);

       }

       echo "<br>";
       echo rectangulo (6,4);
       echo "<br>";

       function cuadrado($base){
         return ($base * $base);
       }

        echo "<br>";
        echo cuadrado (6);
        echo "<br>";

       function circulo($radio){
        $pi = 3.14;
        return ($radio*$radio)*$pi;

       }

       echo "<br>";
       echo circulo (4);
       echo "<br>";



     ?>
