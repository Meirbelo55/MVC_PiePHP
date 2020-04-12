<?php 
namespace Model;
  class UserModel {
      private $email;
      private $password;
      public function __construct($email,$password) {
        $this->email = $email;
        $this->password = $password;    
      }
        public function save(){
          $find = new \Core\Database;
          $bdd = $find->dbconnect();
          $requet = $bdd->prepare("INSERT INTO Users(email,password)VALUES(:email,:password)");
          $requet->execute([":email" => $this->email,":password" => $this->password]);
        }
        public function login() {
          $find = new \Core\Database;
          $bdd = $find->dbconnect();
          $loginrequette = $bdd->prepare("SELECT * FROM Users WHERE(email,password) LIKE :email,:password)");
          $loginrequette->execute([":email" => $this->email,":password" => $this->password]);
        }
  }
