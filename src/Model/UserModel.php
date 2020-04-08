<?php 
namespace Model;
    class UserModel {
      private $email;
      private $password;
    public function save(){
      $this->dbconnect();
      //$requet = $bdd->prepare('INSERT INTO users(email,password)VALUES($email,$password');
    //$requet->execute([":email" => $email, ":password" => $password]);
    echo 'hgf';
      }
}