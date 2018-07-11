<?php
 require_once'conexion.php';


$query = $db->query('SELECT * FROM genres');
$genres = $query->fetchAll(PDO::FETCH_ASSOC);


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
          <?php foreach ($genres as $genre): ?>
              <option value="<?=$genre['id']?>"><?=$genre['name']?></option>
            <?php endforeach; ?>
        </select>
   </div>

  </body>
</html>
