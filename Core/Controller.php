<?php
    namespace Core;
class  Controller
{
public function render($view,$scope=[]) 
{
extract($scope);
$f = implode (DIRECTORY_SEPARATOR,[dirname(__DIR__),'src','View',str_replace('Controller','', basename(get_class($this))),$view ]). '.php';
}

}
Cette classe Controller doit être étendu par tous les Controllers qui se trouvent dan src/Controller.
Et le but est que tu appelles cette fonction render dans UserController par exemple afin d'afficher une view.