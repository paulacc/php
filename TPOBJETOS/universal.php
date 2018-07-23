<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


class Peliculas {
  public static function TraerPeliculas() {

    require 'conexion.php';

    $Busqueda= "SELECT * FROM movies";
    $ConsultaSql= $db->prepare($Busqueda);
    $ConsultaSql->execute();
    $Resultado = $ConsultaSql->fetchAll(PDO::FETCH_ASSOC);

    return  $Resultado;
  }
}


$pelis = Peliculas::TraerPeliculas();
var_dump($pelis);
exit;


 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

     <div>
       <label >Genero</label>
            <select name="genre_id" >
         <option value="">Elegi Genero</option>
           <?php foreach ($resultado as $pelicula): ?>
               <option value="<?=$pelicula['id']?>"><?=$pelicula['name']?></option>
             <?php endforeach; ?>
         </select>
    </div>

   </body>
 </html>
