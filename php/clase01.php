<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
       $nombre = 'Paula';
       $apellido = 'Castex';
       $casado = false;
       $pais = 'Argentina';
       $año = 2018;


        echo "Bienvenido $nombre $apellido $año ";
        echo '<br>';
        echo $pais;

        var_dump($pais);

        $uno = "Tres";
        $dos = "tristes";
        $tres = "tigres";
        $cuatro = "tragan";
        $cinco = "trigo";
        $seis = "en";
        $siete = "un";
        $ocho = "trigal";

        echo "$uno $dos $tres $cuatro $cinco $seis $siete $ocho";
        echo "<br>";
        echo " Tengo $siete $tres dentro de un $ocho";


        $miArray = [];
        $miArray [0]= [];
        $miArray [1]= "Hola";
        $miArray [0] []= "Chau";

        var_dump($miArray);



        $arrayAnimal = ["perro", "gato", "iguana", "leon","tigre"];
        $arrayAnimal [5] = "puma";
        $arrayAnimal [6] = "elefante";
        $arrayAnimal [0] = "mono";
        $arrayAnimal [100] = "lobo";
        $arrayAnimal [16] = "ardilla";

        var_dump($arrayAnimal);

         echo "Me gustan los animales; $arrayAnimal[0],  $arrayAnimal[1],  $arrayAnimal[2], $arrayAnimal[3],  $arrayAnimal[4],  $arrayAnimal[5],$arrayAnimal[6],$arrayAnimal[100],$arrayAnimal[16]";


        $auto = ["Paula"];
        $auto [14] = "Cruz Blanca";
        $auto ["marca"] = "Kia";
        $auto ["modelo"] = "New";
        $auto ["anio"] = 2015;
        $auto ["patente"] = 85329;
          $auto ["poliza"] = 4575930;

        var_dump($auto);



     ?>

  </body>
</html>
