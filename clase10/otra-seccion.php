<?php
  session_start();

  if (isset($_COOKIE['colorElegido'])) {
    $_SESSION['colorElegido'] = $_COOKIE['colorElegido'];
  } else {
      $_SESSION['colorElegido'] = '';
  }

  echo $_SESSION['colorElegido'];
  $otroColor = $_SESSION['colorElegido'];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Otra sección</title>
  </head>
  <body style="background-color: <?php echo $otroColor ?>">
    <h1>Otra sección</h1>
  </body>
</html>
