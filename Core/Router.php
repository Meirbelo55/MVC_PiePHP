<?php
     class Router 
     {
       private static $routes;
       public static function connect($url,$route)
       {
         $newurl = substr($url,11);
          //$staticcontroller = $route[2];
               // $staticaction = $route[3];
         self::$routes[$url] = $route;
         var_dump($route);
      //pour cheker si il ya ube route static
        if($register = $controller[2])
        {
          //echo 'bbbb';
        }
        
       }
       public  static function get($url)
       {

       }

      }
     