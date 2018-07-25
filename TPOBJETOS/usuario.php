<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'conexion.php';


 class Usuario
 {

    private $id;
    private $name;
    private $email;
    private $pwd;


    function __construct($name,$email,$pwd,$id=null)
    {
      $this->id = trim($id);
      $this->name = trim($name);
      $this->email = trim($email);
      $this->pwd = trim($pwd);

    }

         public function getId() {
           return $this->id;
          }

          public function getName(){
            return $this->name;
          }

          public function getEmail(){
            return $this->email;
          }

          public function getPwd(){
            return $this->pwd;
          }




        public function GuardarUsuario()
        {
          include 'conexion.php';
         try {
           $phash = password_hash(trim($this->pwd),PASSWORD_DEFAULT);
           $sql = "INSERT INTO movies_db.users (name, email, password) VALUES ('{$this->name}','{$this->email}','{$phash}')";
           $query = $db->prepare($sql);
           $query->execute();


         }
         catch( PDOException $Exception ){
         }


       }


    }

?>
