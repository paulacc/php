
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $color = ['Blanco' => '', 'Verde'=> "#94e85c", 'Rojo'=> "#d12549"];

     ?>

     <ul>
       <?php foreach ($color as $colores): ?>
         <strong> <?php echo $colores ?> </strong>
       <?php endforeach; ?>
     </ul>

     <ul>
       <?php foreach ($color as $colores => $value):?>
        <li> <?=$colores?></li>
      <?php endforeach; ?>


    </ul>



  </body>
</html>
