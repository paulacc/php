<?php

 class Usuario{

   $private $id;
   $private $name;
   $private $email;
   $private $pwd;



      public function __construct ($id,$name,$email,$pwd){
      require_once 'connect.php':
       $this->id = $id;
       $this->name = $name;
       $this->email = $email;
       $this->pwd = $pwd;


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



        }


        public function Registrar(){

         try {
           $sql = "INSERT INTO `users` 	(`id`,`name`, `email`, `pwd`)";
           $query = $db->prepare($sql);
           $query->execute();
           //$datosusuario = $query->fetchAll(PDO::FETCH_ASSOC);
         }
         catch( PDOException $Exception ) {
         }


       }


 }
?>
