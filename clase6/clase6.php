<?php
$titulo = 'Tutorial PHP';



 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php echo $titulo

  /*var_dump($_POST['email']);
  foreach ($_POST as $key => $value) {
    echo "$value <br>";

  }*/


  ?>


  </body>
</html>


<p>
Muchas Gracias por registrarte <?php echo $_POST['name'] ?>
nos has dicho que tu país de nacimiento es <?php echo $_POST['pais'] ?>. Hemos registrado tu email <?php echo $_POST['email'] ?>.
Tus pasatiempos son
</p>

    
