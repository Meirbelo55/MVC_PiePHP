<?php
    namespace Core;
    class Database {
    function dbConnect()  {
    try  {
        $db = new PDO('mysql:host=localhost;users;','root','root');
        return $db;
    }
        catch(Exception $e)  {
        die('Erreur : '.$e->getMessage());
        }
    }
    }
