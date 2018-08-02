<?php

session_start();

function logInUser($user){
    $_SESSION['email'] = $user->getEmail();
}

function isLogued(){
  return isset($_SESSION['email']);
}





 ?>
