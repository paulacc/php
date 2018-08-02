<?php
$host = 'mysql:host=127.0.0.1;dbname=prueba;port=3306';
$db_user = 'root';
$db_pass = 'root';
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];


try{
  $db = new PDO($host,$db_user,$db_pass,$opt);
}catch(PDOException $Exception){
  echo $Exception->getMessage();
}

 ?>
