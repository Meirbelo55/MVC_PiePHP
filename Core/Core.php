<?php
  namespace Core;
  use Router;
    class Core {
      public function __construct() {
        require_once('src/routes.php');
      }
      public function run() {
        $arr = explode('/',$_SERVER['REDIRECT_URL']);
        $class =  ucfirst($arr[2]).'Controller';
        $action = $arr[3].'Action';
        $myurl = $_SERVER['REDIRECT_URL'];
        $result = substr($myurl,11);
        $route = Router::get($result);
        if($route !== null) {
          echo 'custom root found';
        }
        else  {
          if (class_exists($class)AND(method_exists($class,$action))) {
            $controller = new $class;
            $controller-> $action();
          } 
          elseif(($class == 'Controller')||(class_exists($class)))  {
            if($action != 'Action') {
            echo 'Erreur 404';
            }
            else  {
              $app = new \UserController;
              $app->IndexAction();
            }
          }
          elseif(class_exists($class) && ($action !== 'Action'))  { 
            $app = new \AppController;
            $app->IndexAction();
          }
          else  {
            echo "Error 404";
          }
        }
      }
   }
        

      