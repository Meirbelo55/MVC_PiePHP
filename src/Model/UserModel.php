<?php 
namespace Model;
    class UserModel {
      private $email;
      private $password;
    public function save() {
      $requet = $bdd->prepare('UPDATE users SET email = '.$email.', password = '.$password.'');
		$requet->execute([":idabo" => $reponse_abonnement, ":prenom" => $prenom_abo]);
      }
}