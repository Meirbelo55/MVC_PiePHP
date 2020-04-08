<?php
          function autoloader($classname) {
          $class  = explode('\\',$_SERVER['DOCUMENT_ROOT']);
            if(file_exists('Core/'))  {
                include 'Core/'.$class;
            }
              elseif(file_exists('src/Controller'))  {
                include 'src/Controller/'.$class; 
              }
              elseif(file_exists('src/Model'))  {
                include 'src/Model/'.$class; 
              }
}