<?php

session_start();

 $colores = [
   'Verde' => '#51df16',
   'Amarillo' => '#ced20e',
   'Rojo' => '#eb361d',
   'Violeta' => '#8814d0',
 ];

 if (isset($_COOKIE['colorElegido'])) {
   $color = $_COOKIE['colorElegido'];
 } else {
   $color = '';
 }

  if($_POST){
    // var_dump($colores);
     $color = $_POST['color'];
     echo "Seleccionado: $color";
     setcookie('colorElegido', $color, time() + 10);
     $_SESSION['colorElegido'] = $color;
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style >

    </style>
  </head>
  <body style="background-color: <?php echo $color ?>">
    <form method="post">
       <select name="color">
        <option value="">Elegir color</option>
            <?php foreach ($colores as $key => $value): ?>
                  <?php if ($value == $color): ?>
                      <option selected value="<?=$value?>"><?=$key?></option>
                  <?php else: ?>
                      <option value="<?=$value?>"><?=$key?></option>
                  <?php endif; ?>
         <?php endforeach; ?>
      </select>
      <button type="submit" name="button">Enviar</button>
    </form>
  </body>
</html>
