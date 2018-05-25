<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
       var_dump($_POST['nombre']);
       foreach ($_POST as $key => $value) {
         echo "$value <br>";

       }

     ?>
  </body>
</html>
