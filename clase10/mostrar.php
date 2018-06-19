<?php

  session_start();

  if(isset($_SESSION['contador'])){
    //pregunto si esta o no definido con el isset , si no uso el isset no muestra el 0 en la pantalla
   echo $_SESSION['contador'];
  }
 ?>
