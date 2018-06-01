<?php

$auto = [
    'marca' => 'Ford',
    'color' => 'rojo',

];

 $autoJson = json_encode($auto);
echo "<br>";

$autoPhp = json_decode($autoJson,true);
echo "<br>";

var_dump($autoPhp['marca']);
var_dump($autoPhp['color']);


 $miArray = [ 'a'=>1, 'b'=>2, 'c'=>'Yo <3 JSON'];
  var_dump ($miArray);

  $miArrayJason = json_encode($miArray);
  echo $miArrayJason;

  $deJSONaArray = ;


 ?>
