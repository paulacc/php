<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $numero1 = 74;
    $numero2 = 56;

     if($numero1 > $numero2){
       echo "El numero mayor es $numero1";
     }else{
       echo "El numero mayor es $numero2";

     }

      echo "<hr>";

     $numero =rand(1,5);

     if($numero == 1 || $numero == 3){
       echo $numero;
     }

     echo "<hr> ";

      if($numero != 3){
        echo "El numero no es 3";
      }else if($numero == 3){
        echo "$numero";
      }

       echo "<hr> ";

      $num = 56;

      echo"<hr>";

      if($num > 50){
        echo "$num es mayor a 50";
      }else if($num < 50){
        echo "$num es menor a 50";
      }else if($num == 50){
        echo "el numero es igual 50";
      }

       echo "<hr>";
      $nombreDeUsuario = "admina";
      $ClaveDeUsuario =  "1234";

       echo"<hr>";
      if($nombreDeUsuario == "admin" && $ClaveDeUsuario == "1234"){
        echo "¡Bienvenido a tu cuenta!";
      }else if ($nombreDeUsuario == "admin" && $ClaveDeUsuario != "1234"){
         echo "ingresaste una clave incorrecta";

      }else if ($nombreDeUsuario != "admin" && $ClaveDeUsuario == "1234"){
        echo "ingresaste un nombre de usuario erroneo";

      }

     echo "<hr> ";


     $edad = 33;
     $casado = false;
     $sexo = "femenino";

     if(($edad > 18 && !$casado) || $sexo== "otro"){
       echo "bienvenido";
     }else{
       echo "no eres bienvenido";
     }

     echo "<hr>";


     $cantidadDeAlumnos = 0;

     if($cantidadDeAlumnos){
       echo "true";
     }else{
       echo "false";
     }

    echo "<hr>";

     if ($i = 0) {
    echo "true";
    } else {
    echo "false";

    }

    echo "<hr>";
    $number =95;
     echo ($number%2==0) ?"el $number es par": "el $number es impar";

  echo "<hr>";

   $name = "Ivonne";

   switch ($name) {
     case 'Paula':
         echo "Hola $name";
       break;
       case 'Ivonne':
           echo "Hola $name";
      break;
      case 'Anita':
          echo "Hola $name";
     break;
     case 'Alvaro':
         echo "Hola $name";
    break;
     default:
       echo "No hay a quien saludar";
       break;
   }

echo "<hr>";
  $colorRemera = "rojo";

  switch ($colorRemera) {
    case 'amarillo':
    case 'rojo';
    case  'verde';
          echo "El color de la remera es un color primario";

   break;
    default:
      echo "La remera es de color desconocido";
      break;
  }




     ?>
  </body>
</html>
