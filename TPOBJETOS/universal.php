<?php
 require 'conexion.php';

 class Peliculas{
       public static function TraerPeliculas(){

         $Busqueda= $db->query("SELECT * FROM movies");
         $ConsultaSql= $db->prepare($Busqueda);
         $ConsultaSql->execute();
         $Resultado = $Busqueda->fetchAll(PDO::FETCH_ASSOC);

           return  $Resultado;


       }
 }



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
