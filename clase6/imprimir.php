<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
       var_dump($_POST['email']);
       foreach ($_POST as $key => $value) {
         echo "$value <br>";

       }

       $headers =  getallheaders();
          foreach($headers as $key=>$val){
          echo $key . ': ' . $val . '<br>';
        }

        echo "<br>";
        echo "<hr>";
        var_dump($_SERVER);
     ?>
  </body>
</html>
