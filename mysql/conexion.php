<?php
$host = 'mysql:host=127.0.0.1;dbname=movies_db;port=3306';
$db_user = 'paula';
$db_pass = 'castex';
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];


try{
$db = new PDO($host,$db_user,$db_pass,$opt);


}catch(PDOException $Exception){
  echo $Exception->getMessage();
}

 ?>
