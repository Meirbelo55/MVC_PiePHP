<?php
namespace Core;
      class Core
      {
            public function run()
            {
            $_SERVER['REDIRECT_URL'];
            $arr = explode('/',$_SERVER['REDIRECT_URL']);
            $class =  ucfirst($arr[2]).'Controller';
            $action = $arr[3].'Action';
            //echo $class;
            //echo $action;
            //var_dump(method_exists($class,$action));

                //si la class et la method exist alors j instancie selon ce kil met en parametre
                  if (class_exists($class)AND(method_exists($class,$action))) 
                  {
                       // echo 'instancier la class en parametre';
                        $controller = new $class;
                        $controller-> $action();
                        // par defaut
                  }
                  elseif(($class == 'Controller')||(class_exists($class)))
                       {
                         //ca instancie appcontroller
                        echo 'instacier controller'."\n";
                         $app = new \AppController;
                         $app->$action();
                       }
                        elseif(class_exists($class) && (!method_exists($class,$action)))
                       {
                         
                        echo 'eror';
                         $erreur = new \Error404;
                         $erreur->error();
                       }
                        
                  //sinn ereur 404
                  else
                  {
                   echo 'yyyyy';
                   $erreur = new \Error404;
                   $erreur->$action();

                  }
                  
                  
            }
      }
      

        

      