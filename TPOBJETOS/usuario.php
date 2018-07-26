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



        public function Validar()
        {

          $errores = [] ;

          if(empty($this->name)){
              $errores[] = "El campo nombre es obligatorio";
           }elseif (!ctype_alpha($this->name)) {
              $errores[] = "El campo nombre solo debe contener letras";
           }
           if($this->email == ''){
            $errores[]= "El campo email es obligatorio";

          }elseif(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
             $errores[] = 'El correo no es válido" ';
          }

          if(empty($this->email) ){
            $errores['pwd'] = "Debes ingresar una contraseña ";
         }elseif ((strlen($pwd) < 5 )) {
            $errores['pwd'] = "La contraseña debe tener más de 5 caracteres ";
         }
         if($pwd!= $rpwd){
           $errores['rpwd']= "las contraseñas deben coincidir ";
         }
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
