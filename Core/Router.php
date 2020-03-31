<?php
     class Router 
     {
       private static $routes;
       public static function connect($url,$route)
       {
         self::$routes[$url]=$route ;
       }
        public static function get($url)
        { 
          self::$routes[$url] = $route;
          $controller = $route['Controller'];
          $action  = $route['action'];
          $newurl = substr($url,12);
          $userurl = $_SERVER['REDIRECT_URL'];
          $newuserurl = substr($userurl,12);
            if($newurl = $newuserurl[2])
            {
              self::connect($url,$route);
              $over = new \UserController;
              $over->indexAction();
            }
              else
              {
              return null;
              }
          }
      }
    // Dans private $routes on va mettre tous nos chemins predefinies.
//Avec connect() tu cree un nouveau chemin (donc un nouveau $routes) 
//avec un controller et une action predefenie
//Avec get() on va juste checker si le chemin a deja un $routes avec 
//un controller et una action predefinie, si oui on retourne du coup ce chemin avec $routes[$chemin en question] si non on retourne null