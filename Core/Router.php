<?php
    class Router {
      private static $routes;
      public static function connect($url,$route) {
        self::$routes[$url]=$route;
        //var_dump($route);
        //var_dump($route);
      }
      public static function get($url) { 
        $newurl = substr($url,11);
        //self::connect($url);
        var_dump($url);
        if(isset(self::$url))  {
         return self::$routes[$url];
        }
        else {
          return ["null"];
        } 
      }
    }
    