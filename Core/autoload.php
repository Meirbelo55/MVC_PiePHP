<?php
        
         spl_autoload_register("Autoload");
        function Autoload($class_name) 
       {
         $path = "Core/";
         $ext = 'Core.php';
         $fullpath = $path . $class_name . $ext;
         if(!file_exists($fullpath))
{
return false;
}
            //include 'Core.php';
            //include_once $fullpath;
       };
 



   // class Autoload
       // {
         //   function register()
         //   {
         //   var_dump(spl_autoload_register(('autoload')));
         //   }
          //      function autoload($class_name)
           //     {
             //   var_dump(require $class_name.'autoload.php');
             //   }

      //  }
    