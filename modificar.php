<?php
 session_start();

  if(isset($_POST['incrementar'])){
    if (isset($_SESSION['contador'])) {
      $_SESSION['contador'] += 1;
    } else {
      $_SESSION['contador'] = 0;
    }
  }

  if(isset($_POST['reiniciar'])){
    $_SESSION['contador'] = 0;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><?php echo isset($_SESSION['contador']) ? $_SESSION['contador'] : 'No hay conteo'; ?></h1>
      <form class="" action="" method="post">
        <button type="submit" name="reiniciar">Reiniciar</button>
        <br>
        <button type="submit" name="incrementar"> Incrementar</button>
      </form>
    </body>
</html>
