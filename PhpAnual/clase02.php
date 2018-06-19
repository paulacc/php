<?php
//la funcion rand() al recibir dos parametros, genera un numero aleatorio entre esos dos numeros.
$numeroAleatorio = rand(1,5);
//Al guardarme lo que genera el random en una variable, puedo utilizarla luego, y realizar las comparaciones correspondientes por ejemplo:
if ($numeroAleatorio == 3 || $numeroAleatorio == 5) {
    echo "el numero es 3 o 5";
}else {
    echo 'No es ni 3 ni 5';
}
// si el numeroAleatorio es 3 o 5, voy a imprimir el if ["el numero es 3 o 5";], Si el numero no es ni 3 ni 5 imprimo el else ['No es ni 3 ni 5';]
echo "<br>";echo "<br>";echo "<br>";
$x = 3;
$y = 10;

$max = $x > $y ? 'el primero es el mayor' :'el segundo es el mayor';

echo "$max";
echo "<br>";
//el if ternario posee un "return" interno, por lo cual no se puede poner echo en sus devoluciones, entonces guardamos el resultado en una variable, o hacemos echo el if ternario directamente
echo $x > $y ? 'el primero es el mayor' :'el segundo es el mayor';

echo "<br>";
echo "<br>";
echo "<br>";
$colorRemera = 'amarillo';
//Como no tienen break los 3 primeros casos, en cualquiera de ellos que se cumpla la condicion, va a entrar en el primer echo.
switch ($colorRemera) {
    case 'amarillo':
    case 'azul':
    case 'verde':
        echo "Lemera es color $colorRemera";
    break;
    default:
        echo 'No es color primario';
        break;
}
