<?php

//Agregando archivos verificando si existe o no archivo


$fp = fopen('prueba.txt','w');
fclose($fp);

$txt= 'texto.txt';
$agregar = "hola mundo\n";

if(file_exists($txt)){
   file_put_contents($txt,$agregar,FILE_APPEND);
   echo "Trabajo hecho";
   echo "<br>";

}else{
  echo "el $txt no existe";

}



$fp = fopen($txt, "r");
$contenido =  fread($fp, filesize($txt));
echo $contenido . "<br/>";

fclose($fp);

echo "<hr>";

$categorias = file_get_contents('categorias.json');
$categoriasArrayJSON = explode(PHP_EOL,$categorias);

 ?>
