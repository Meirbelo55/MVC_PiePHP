<?php
    function autoloader($classname) {
      $ext = '.php';
      $path = [
      "./",
      "./src/",
      "../src/"];
      $newpath = str_replace("\\",DIRECTORY_SEPARATOR, $classname);
        for ($I = 0; $i < count($path); $i++) {
          $includepath = $path[$i].$newpath.$ext;
          if (file_exists($includepath))  {
            include $includepath;
            }
          }
        }
        spl_autoload_register("autoloader");