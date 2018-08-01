<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);




 class Usuario
 {

    private $id;
    private $name;
    private $email;
    private $pwd;
    private $role;

    function __construct($name,$email,$pwd,$role=1,$id=null)
    {
      $this->id = trim($id);
      $this->name = trim($name);
      $this->email = trim($email);
      $this->pwd = trim($pwd);
      $this->role = trim($role);

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

          public function getRole(){
            return $this->role;
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
                   }elseif ((strlen($this->pwd) < 3 )) {
                    $errores[] = "La contraseña debe tener más de 3 caracteres ";
                  }elseif($this->ValidarEmail()){
                    $errores[] = "El mail ya se encuentra registrado";
                  }
                   if($this->pwd != $rpwd){
                     $errores[]= "las contraseñas deben coincidir ";
                   }
                     return $errores;
                  }



           public function ValidarEmail(){
           include 'conexion.php';


           $consulta = "select count(*) from movies_db.users where email = '{$this->email}'";
           $resultado = $db->query($consulta);
           $existe = 0;
           foreach ($resultado as $registro) {
           $existe = $registro[0];
           }
           return $existe;
         }



        public function GuardarUsuario()
        {
          include 'conexion.php';
         try {
           $phash = password_hash(trim($this->pwd),PASSWORD_DEFAULT);
           $sql = "INSERT INTO movies_db.users (name, email, password,role) VALUES ('{$this->name}','{$this->email}','{$phash}','1')";
           $query = $db->prepare($sql);
           $query->execute();
         }
         catch( PDOException $Exception ){
         }
       }


        public function ValidarPwd(){
          $consulta = '';
        }





    }

?>
