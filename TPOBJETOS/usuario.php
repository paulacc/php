<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);




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



          public function Validar($rpwd)
                {
                  $errores = [] ;

                  if(empty($this->name)){
                      $errores[] = "El campo nombre es obligatorio";
                   }elseif (!ctype_alpha($this->name)){
                      $errores[] = "El campo nombre solo debe contener letras";
                   }
                   if($this->email == ''){
                    $errores[]= "El campo email es obligatorio";
                  }elseif(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                     $errores[] = 'El correo no es válido" ';
                  }
                  if(empty($this->email)){
                    $errores[] = "Debes ingresar una contraseña ";
                 }elseif ((strlen($this->pwd) < 5 )) {
                  $errores[] = "La contraseña debe tener más de 5 caracteres ";
                 }
                 if($this->pwd != $rpwd){
                   $errores[]= "las contraseñas deben coincidir ";
                 }
                   return $errores;
                }



        //public function ValidarEmail($email){
          //include 'conexion.php';

           //$sql = $cadenaDeBusqueda = "SELECT id,name,email,password FROM users WHERE email = :email";
          // $consultaAlaBase = $db->prepare($cadenaDeBusqueda);
          //$consultaAlaBase->bindParam(":email",$email,PDO::PARAM_INT);
          //$consultaAlaBase->execute(); (editado)

  //         $Resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    //       if ($Resultado) {
      //       return $Resultado;
        //   }
          // return false;


       //	}



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
