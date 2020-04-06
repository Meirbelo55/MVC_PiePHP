<?php
//namespace Controller;
    class UserController extends \Core\Controller {
        public function addAction()  {
        echo $this->render('register');
        } 
        public function indexAction()   {
        echo 'je suis indexAction ds la class  usercontroller';
        }
    }