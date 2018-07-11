<?php
require_once'conexion.php';

$query = $db->query('SELECT*FROM movies inner join genres on movies.genre_id=genres.id ');
$query ->execute();
$movies = $query->fetchAll(PDO::FETCH_ASSOC);



 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

     <div>
       <label >Peliculas</label>
            <select name="movies_title" >
         <option value="">Elegir Pelicula</option>
           <?php foreach ($movies as $movie): ?>
               <option value="<?=$movie['id']?>"><?=$movie['title']?> - <?=$movie['name']?></option>
             <?php endforeach; ?>
         </select>
    </div>



   </body>
 </html>
