<?php 
namespace Model;
    class UserModel {
      private $email;
      private $password;
    public function save() {
      $requet = $bdd->prepare('UPDATE users SET email = '.$email.', password = '.$password.'');
		$requettemembre7->execute([":idabo" => $reponse_abonnement, ":prenom" => $prenom_abo]);
		//requette pour modfier l'abonnement (nom)
		$requettemembre9 = $bdd->prepare('UPDATE membre LEFT OUTER JOIN fiche_personne ON membre.id_fiche_perso=fiche_personne.id_perso SET membre.id_abo = :idabon WHERE nom = :nom');
		$requettemembre9->execute([":idabon" => $reponse_abonnement, ":nom" => $prenom_abo]);
      }
}