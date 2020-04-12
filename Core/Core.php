<?php
  namespace Core;
  //use Router;
    class Core {
      public function __construct() {
       //require_once('src/routes.php');
      }
      public function run() {
        $arr = explode('/',$_SERVER['REDIRECT_URL']);
        $class = 'Controller\\'.ucfirst($arr[2]).'Controller';
        $action = $arr[3].'Action';
        $myurl = $_SERVER['REDIRECT_URL'];
        $result = substr($myurl,11);
        $route = Router::get($result);
        if($route !== null) {
          echo 'custom root found';
        }
        else  {
          if (class_exists($class)AND(method_exists($class,$action))) {
            echo 'hey there is class and method here';
            $controller = new $class;
            $controller-> $action();
          } 
            elseif($arr[2] == '') {
              echo 'i dont have anything on the url';
              $res = new \Controller\AppController;
              $res->indexAction();
            }
              elseif(class_exists($class)AND($arr[3] == '')) {
              echo 'hey there is here just a class';
              $controller = new $class;
              $controller-> indexAction();
              }
                else  {
                echo 'erreur 404';
                }
        }
        
      }
   }

      