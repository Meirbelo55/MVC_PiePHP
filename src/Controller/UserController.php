<?php
 namespace Controller;
    class UserController extends \Core\Controller {
        
        public function addAction()  {
        echo $this->render('register');
        } 
        public function indexAction()   {
        echo 'je suis indexAction ds la class  usercontroller';
        }
        public function registerAction() {
            $email  = $_POST['email'];
            $password  = $_POST['password'];
            $re = new \Model\UserModel($email,$password);
            $re->save();
        }
       // public function loginAction() {
        //  $email  = $_POST['email'];
        //  $password  = $_POST['password'];
         // $login = new \Model\UserModel($email,$password);
         // $login->login();
        //}
    }