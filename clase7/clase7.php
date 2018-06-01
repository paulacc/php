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
echo "<br>";

var_dump($autoPhp['color']);

echo "<hr>";



 $miArray = [ 'a'=>1, 'b'=>2, 'c'=>'Yo <3 JSON'];
  var_dump ($miArray);
  echo "<br>";

  $miArrayJason = json_encode($miArray);
  echo $miArrayJason;
  echo "<br>";
  $deJSONaArray = json_decode($miArrayJason,true);
  echo $deJSONaArray;
  echo "<br>";
  echo "<hr>";


  foreach ($deJSONaArray as $value) {
    echo  $value;

  }

 ?>
