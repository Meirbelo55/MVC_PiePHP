<?php

namespace Core;
use Router;
      class Core
      {
            public function run()
            {
            $_SERVER['REDIRECT_URL'];
            $arr = explode('/',$_SERVER['REDIRECT_URL']);
            $class =  ucfirst($arr[2]).'Controller';
            $action = $arr[3].'Action';
            //routeru static
              if(($route = Router::get($_serveur['REDIRECT_URL']))!=null)
              {
              echo 'custom root found';
              $controller = $route['controller'];
              echo $theaction = $route['user'];
              }
                else
                {
                 //si la class et la method exist alors j instancie selon ce kil met en parametre
                    if (class_exists($class)AND(method_exists($class,$action))) 
                    {
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
        

      