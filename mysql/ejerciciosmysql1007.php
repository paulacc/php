<?php

$host = 'mysql:host=127.0.0;dbname=movies_db;port=3306';
$db_user = 'root';
$db_pass = 'iorana';
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

$db = new PDO($host,$db_user,$db_pass,$opt);

try{
   $query = $db->query('SELECT * FROM series');
}catch(PDOException $Exception){
  echo $Exception->getMessage();
}


$resultado = $query->fetchAll(PDO::FETCH_ASSOC);
var_dump($resultado);
?>
