<?php

  /*$array = ["Maria", "Juana","Paula","Ivonne"];
  for ($i=0; $i< count($array); $i++) {
      if($array[$i] == "Paula"){
         continue;
      }
      echo "$array[$i] <br>";

  }*/


error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);




  echo "<hr>";
  echo "Ejercicio 1/2";
  echo "<hr>";

  for($i=1; $i<101; $i++){
    echo "$i <br>";

  }

    echo(rand(1,100));


   echo "<hr>";
   echo "Ejercicio 3";
   echo "<hr>";

    for($i=1; $i<11; $i++){
      $num=2;
      $producto= $i*$num;
     echo  "($num*$i = $producto)";
   }

   echo "<hr>";
   echo "Ejercicio 4";
   echo "<hr>";


    $contador= 100;

    while ($contador > 84 ){
    echo "$contador <br>";
    $contador--;

    }


     echo "<hr>";
     echo "Ejercicio 5";
     echo "<hr>";



     $contador = 1;

     while ($contador < 6 ){
        $mult = $contador*2;
      echo "$mult <br>";
     $contador++;

     }

     echo "<hr>";
     echo "Ejercicio 6";
     echo "<hr>";


      $cara = 0;
      $tiros = 0;

      while($cara < 5){
        $moneda= rand(0,1);
        if($moneda == 1){
          $cara++;
        }
         $tiros++;
      }
      echo "En $tiros tiros, salio $cara veces caras";
    echo "<br>";
     echo "<br>";


     echo "<hr>";
     echo "Ejercicio 7";
     echo "<hr>";


     echo "<hr>";
     echo "Ejercicio 8";



    echo "<hr>";

      $nombres= ["Paula","Ivonne","Juana","Alfonsina","Eva"];
      //$array_nom = count($nombres);

    for($i=0; $i<count($nombres); $i++){
        echo $nombres[$i];
         echo "<br>";
      }

    echo "<hr>";

    foreach ($nombres as $valor){
      echo $valor;
      echo "<br>";
    }

    echo "<hr>";

    $contador = 0;

    while($contador < count($nombres)){
      echo "$nombres[$contador] <br>";
      $contador++;
    }

   echo "<hr>";
     $contador = 0;
    do{
      echo "$nombres[$contador]<br>";
      $contador++;
    }while($contador < count($nombres));

  /*while ($contador < count($arrayRecibido)) { //Extraemos los datos del array de uno en uno mientras haya datos
   echo ($contador+1).'- '.$arrayRecibido[$contador].'<br/>'; //Mostramos el contenido del array usando el incremento de la variable
   $contador++; //Usamos la variable para ir incrementando los númros
 } */

     /*

     probar sobre htlm cualquiera
     sitio cualquiera bitrix gadgets
     integracion - todo pago boton
     automatizacion

      */
      echo "<hr>";
      echo "Ejercicio 9";
      echo "<hr>";

      $number = [0,3,4,7,8,5,6,9,10,1,2];
      for($i=0; $i<count($number); $i++){
        if($number[$i] == 5){
          echo "Se encontro 5";
            break;
        }

         echo "$number[$i]<br>";
      }

       echo "<hr>";


       $number = [0,3,4,7,8,5,6,9,10,1,2];


      $contador = 0;

      while( 5 !== $contador ){
       echo "$number[$contador] <br>";
       $contador++;


     }

           echo "<hr>";
           echo "Ejercicio 14";
           echo "<hr>";

     $ceuA = [

      	"Argentina"	=> ["Buenos Aires", "Córdoba", "Santa Fé"],

      	"Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],

      	"Colombia" => ["Cartagena", "Bogota", "Barranquilla"],

      	"Francia" => ["Paris", "Nantes", "Lyon"],

      	"Italia" => ["Roma", "Milan", "Venecia"],

      	"Alemania" => ["Munich", "Berlin", "Frankfurt"]

    ];

        foreach ($ceuA as $pais => $ciudades) {

           echo "Las ciudades de $pais";
           echo "<br>";
           foreach ($ciudades as $ciudad) {
              echo "<li>$ciudad</li>";
           }

        }
         // la key de ciudades es la posicion;


         $ceuB = [
         	"Argentina"	=> [
                 'ciudades' =>["Buenos Aires", "Córdoba", "Santa Fé"],
                 'esAmericano' => true,
             ],
         	"Brasil" => [
                 'ciudades' => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
                 'esAmericano' => true,
             ],
         	"Colombia" => [
                 'ciudades'=>["Cartagena", "Bogota", "Barranquilla"],
                 'esAmericano' => true,
             ],
         	"Francia" => [
                 'ciudades' => ["Paris", "Nantes", "Lyon"],
                 'esAmericano' => false,
             ],
         	"Italia" => [
                 'ciudades' => ["Roma", "Milan", "Venecia"],
                 'esAmericano' => false,
             ],
         	"Alemania" => [
                 'ciudades' => ["Munich", "Berlin", "Frankfurt"],
                 'esAmericano' => false,
             ]
         ];

      //la key es el pais que es
      //el value es todo lo ademas
      echo "<hr>";
      echo "Ejercicio 15 es americano";
      echo "<hr>";

              foreach ($ceuB as $pais => $cidade) {

                  echo "Las ciudades de $pais";
                echo "<br>";

                foreach ($cidade as $detalle => $valor) {
                         echo $detalle;
                          echo "<br>";
                  }



                }





                /*  $array = [1,2,3,4,5];

                   foreach ($array as $value) {
                     echo $value;

                   }
*/
         echo "<br>";


         echo "<hr>";
         echo "Ejercicio alimentos";
         echo "<hr>";


        $alimentos = [
           "fruta" => [
                'tropical' => ["kiwi","melon"],
                'citrico' => ["mandarina","pomelo"],
           ],
           "verduras" =>[
              'hortalizas' => ["zanahoria","puerro"],
              'de hoja' => ["lechuga","acelga"],

           ],
           "carne" => [
               'vacuno' => ["lomo","cuadrada"],
               'cerdo' => ["carre", "chuleta"],
           ]
        ];

          foreach ($alimentos as $clave_ali => $ali) {
                    echo " tipo de alimento $clave_ali <br>";
                    echo "<br>";

                    foreach ($ali as $detalle => $masdetalle) {
                      echo  "<li> tipo de $detalle</li>";
                      echo "<br>";
                    }

                    foreach ($masdetalle as $tipo ) {

                      echo "<strong> $tipo</strong>";
                      echo "<br>";
                        echo "<br>";
                    }


          }

 ?>
