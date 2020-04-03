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
        var_dump($route); 
       if($route !== null) {
        echo 'custom root found';
       // Router::connect($url);
        //Router::connect($url,$route);
       // var_dump($a);
        //$static = new UserController;
        //$static->addAction;
        }
        else  {
          //si la class et la method exist alors j instancie selon ce kil met en parametre
          if (class_exists($class)AND(method_exists($class,$action))) {
            $controller = new $class;
            $controller-> $action();  
                    }
                      elseif(($class == 'Controller')||(class_exists($class)))
                        {
                            if($action != 'Action')
                            {
                              $app = new \AppController;
                              $app->error();
                            }
                              else
                              {
                                //ca instancie appcontroller
                                $app = new \UserController;
                                $app->indexAction();
                              }
                        }
                          elseif(class_exists($class) && ($action !== 'Action' ))
                          { 
                          $app = new \AppController;
                          $app->error();
                          }
                              else
                              {
                                $app = new \AppController;
                                $app->error();
                              }
                }
      }
   }
        

      