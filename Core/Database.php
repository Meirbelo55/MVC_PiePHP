<?php
    namespace Core;
    use PDO;
        class Database {
          function dbConnect()  {;
            try  {
                   $bdd = new PDO('mysql:host=localhost;dbname=pie_php','root','root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                   return $bdd;
            }
            catch(Exception $e)  {
            die('Erreur : '.$e->getMessage());
            }
          }
        }