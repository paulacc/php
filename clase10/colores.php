<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style >

    </style>
  </head>
  <body>
    <form  method="post">
         <label for="">Colores</label>
         <select class="" name="">
            <option value="verde">Verde</option>
            <option value="rojo">Rojo</option>
            <option value="amarillo">Amarillo</option>
         </select>
         <button type="submit" name="button">Enviar</button>
    </form>
  </body>
</html>

<?php

if(isset ($_POST['verde'])){
    echo "<li>hola <li>";

}

 ?>
