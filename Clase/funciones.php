<?php
 require 'conn.php';

 /*try{
   $sql = 'insert into mascotas (nombre,especie,humano_id) values ("Bronco","Perro",1)';
   $stmt = $db->prepare($sql);
   $stmt->execute();

 }catch(Exception $e){
   $e->getMessage();
 }
 */

 $sql = 'insert into mascotas (nombre,especie,humano_id) values ("Bronco","Perro",1)';
 echo $sql;


 function insert($tabla,$datos)
 {
    $columnas = '';
    foreach ($datos as $key => $value) {
       $columnas .= $key . ',';
       $values .= '""'
    }
    return trim($columnas,',');
    //return 'insert into'.$tabla.'(nombre,especie,humano_id) values ("Bronco","Perro",1)';
    //$sql = 'insert into'.$tabla.'('.$columnas.') values ("Bronco","Perro",1)';
    //insert('mascotas','nombre,especie,humano_id');
 }

 $datos = [
      'nombre' => 'Bronco',
      'especie' => 'Perro',
      'humando_id'=> 1

 ];

 echo insert('humanos',$datos);

 ?>
