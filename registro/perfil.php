<?php
  require_once('funciones.php');
  $usuarios = traerTodos();


 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
   <?php foreach ($usuarios as $usuario): ?>
     <li><?php echo $usuario ['email']  ?></li>
      <li><?php echo $usuario ['pais']  ?></li>

   <?php endforeach; ?>
   </body>
 </html>
