<?php

  /*$array = ["Maria", "Juana","Paula","Ivonne"];
  for ($i=0; $i< count($array); $i++) {
      if($array[$i] == "Paula"){
         continue;
      }
      echo "$array[$i] <br>";

  }*/

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

     $n = rand(0,1);
     while($n == 1){
       echo "$n <br>";
       $n++;

     }

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








 ?>
