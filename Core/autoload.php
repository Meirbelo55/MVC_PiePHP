<?php
        function Autoload($class_name) 
         {
          $ext = '.php';
          $newpath = str_replace('\\',DIRECTORY_SEPARATOR,$class_name).$ext;
           $core = __DIR__;
           $new = $core.DIRECTORY_SEPARATOR.$class_name.$ext;
              if(!file_exists($newpath))
                {
                $srcpath = __DIR__.'Controller/'.$class_name;
                $src = str_replace('Core','src/',$srcpath).$ext;
                  if(!file_exists($src))
                    {
                    $srcmodel = __DIR__.'Model/'.$class_name;
                    $newmodel = str_replace('Core','src/',$srcmodel).$ext;
                    }
                      if(!file_exists($newmodel))
                      {
                       $srcview = __DIR__.'View/Error'.$class_name;
                      $newview = str_replace('Core','src/',$srcmodel).$ext;
                    
                      }

                      if(!file_exists($newview))
                      {
                      $error = __DIR__.'View/Error'.$class_name;
                      $newerror = str_replace('Core','src/',$srcview).$ext;
                      }
                        if(file_exists($newview))
                          {
                          require($newview);
                          }
                          if(file_exists($new))
                          {
                          require($new);
                          }
                            if(file_exists($src))
                            {
                            require($src);
                            }
                              if(file_exists($newmodel))
                              {
                              require($newmodel);
                              }

                              if(file_exists($newerror))
                              {
                                echo 'hhhh';
                              require($newerror);
                              }
                  }
                    elseif(file_exists($newpath))
                    {
                    require($newpath);
                    }
                    elseif(!file_exists($newpath))
           {
            echo 'j existe pas';
           }
           
           }
          spl_autoload_register("Autoload");