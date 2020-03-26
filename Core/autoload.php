<?php
        function Autoload($class_name) 
         {
          $ext = '.php';
          $newpath = str_replace('\\',DIRECTORY_SEPARATOR,$class_name).$ext;
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
                      $srcview = __DIR__.'View/'.$class_name;
                      $newview = str_replace('Core','src/',$srcmodel).$ext;
                      }
                        if(file_exists($newview))
                          {
                          require($newview);
                          }
                            if(file_exists($src))
                            {
                            require($src);
                            }
                              if(file_exists($newmodel))
                              {
                              require($newmodel);
                              }
                  }
                    elseif(file_exists($newpath))
                    {
                    require($newpath);
                    }
           }
           spl_autoload_register("Autoload");