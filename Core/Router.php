<?php
    class Router {
      private static $routes;
      public static function connect() {
        self::$routes[$url]=$route;
      }
      public static function get($url) {
        $res = $_SERVER['REQUEST_URI'];
      $ttl = substr($res,11);
          self::connect($url,$route);
        //$tab = connect::get($url);

       // var_dump($route);
        //if(isset(self::$url))  {
         //return self::$routes[$url];
        //}
        //else {
        //return ["null"];
        //} 
      }
    }
    