<?php
  require_once('funciones.php');

<<<<<<< HEAD
 var_dump(traerTodos());
=======
  $usuarios = traerTodos();
>>>>>>> 84074db410e92ea0904807c131a40b08122b0b09
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Listado de usuarios</title>
   </head>
   <body>
     <ul>
       <?php foreach ($usuarios as $usuario): ?>
         <li><?php echo $usuario['name'] ?> </li>
          <a href="perfil.php">ver mas</a>
       <?php endforeach; ?>

     </ul>
   </body>
 </html>
