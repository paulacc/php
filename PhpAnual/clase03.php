<?php
//moneda
require_once('navbar.php');
$tiros = 0;
$caras = 0;
while ($caras < 5) {
    $moneda = rand(0,1);
    if ($moneda == 1) {
        $caras++;
    }
    $tiros++;
}
echo "En $tiros tiros, salio $caras veces cara";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
//paises sin esAmericano
$ceuA = [
	"Argentina"	=> ["Buenos Aires", "Córdoba", "Santa Fé"],
	"Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
	"Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
	"Francia" => ["Paris", "Nantes", "Lyon"],
	"Italia" => ["Roma", "Milan", "Venecia"],
	"Alemania" => ["Munich", "Berlin", "Frankfurt"]
];

// foreach ($ceuA as $pais => $ciudades) {
//     echo "Las ciudades de $pais son:";
//     echo "<br>";
//     foreach ($ciudades as $ciudad) {
//         echo "<li>$ciudad</li>";
//     }
// }

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

// echo "Listado de ciudades de Paises Americanos:";
// foreach ($ceuB as $pais => $value) {
//     if($value["esAmericano"]){
//         echo $pais;
//
//         foreach ($value['ciudades'] as $ciudad) {
//             echo "<li>$ciudad</li>";
//         }
//     }
// }

foreach ($ceuB as $paises => $arrayDeAdentro) {
    if ($paises == 'Francia' || $paises == "Italia" || $paises == 'Alemania') {
        continue;
    }
    if ($arrayDeAdentro['esAmericano']) {
        // code...
    }

}


// Nunca se ejecuta el codigo del while, porque primero evalua, y luego intenta ejecutar. Como la condicion es false no entra al while.
$cantidad = 0;
while ($cantidad > 0){
    echo $cantidad;
    $cantidad --;
}
echo "<br>";
echo "<br>";
echo "<br>";
echo $cantidad;

// Caso contrario al anterior, como nueestor código tiene un "do", primeramente ejecuta ese codigo, y luego evalua, llega a imprimer el 0 y restarle uno, luego como la condicion no se cumple ($cantidad no es mayor a 0 ya que vale "-1"), deja de ejecutarse el código
$cantidad = 0;
	do {
		echo $cantidad;
        $cantidad--;
} while ($cantidad > 0);
echo "<br>";
echo "<br>";
echo "<br>";
echo $cantidad;

//En este caso cuando $i, toma el valor de 5, el break, corta la ejecucion del bucle for. y no se imprimen mas numeros, pero si se imprime el var_dump de "hola como estan"
for ($i=0; $i < 10 ; $i++) {
    if ($i == 5) {
        break;
    }
    echo $i;
}
echo "<br>";
var_dump('Hola como estan');

//En este caso, al encontrar el 5, simplemente le decimos con el continue, al for, que continue su bucle, sin hacer nada con el valor $i = 5, Tambien se llega a imprimir el var_dump de "Hola como estan"
for ($i=0; $i < 10 ; $i++) {
    if ($i == 5) {
        continue;
    }
    echo $i;
}
echo "<br>";
var_dump('Hola como estan');

// En este ultimo caso, el exit, no solo corta la ejecucion del for como el break, sino que el exit, ademas corta la ejecucion de todo mi codigo, por ende no se ejecutaria el echo<br>, ni el var_dump de "Hola como estan", ni se imprimirian mas numeros luego de 01234
// for ($i=0; $i < 10 ; $i++) {
//     if ($i == 5) {
//         exit;
//     }
//     echo $i;
// }
// echo "<br>";
// var_dump('Hola como estan');


//La variable $array, es un array asociativo el cual en la posicion numero tiene un 0, en la posicion autos, tiene un array asociativo dentro y la posicion string tiene una cadena de texto de valor 'hola'
// Al recorrer todo el $array con un foreach haciendo un echo de sos $value, me da error la seungda vuelta por que es un array.
// La condicion dentro del foreach es para saber cuando nos encontramos con este array y asi poder hacer un foreach del mismo
//El continue dentro del if, es para que luego de terminar de 'forechear' el array 'autos', continue hacia la proxima iteracion la cual sera para imrpimir el $value de la posicion 'string'
$array = [
    'numero' => 0,
    'autos' => [
        'auto1'=> 'VW',
        'auto2'=> 'Fiat',
        'auto3'=> 'Ford',
    ],
    'string' => 'hola',
];
foreach ($array as $key => $value) {
    if ($key == 'autos') {
        foreach ($value as $auto => $marca) {
            echo "El $auto es marca $marca";
            echo '<br>';
        }
        continue;
    }
    echo $value;
    echo '<br>';
    echo '<br>';
}

require_once('footer.php');
