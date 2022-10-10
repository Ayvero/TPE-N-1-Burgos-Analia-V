<?php
require_once './app/models/user.model.php';
require_once './app/views/login.view.php';
//require_once './app/helpers/auth.helper.php';



class LoginController {

    private $view;
    private $model;
   // private $authHelper;

    public function __construct() {
        $this->view = new LoginView();
        $this->model = new UserModel();
        $this->authHelper = new AuthHelper();
    }


    function login(){
        $this->view->showForm();

    }



    function validate(){
        if(!empty($_POST['email'])&& !empty($_POST['password'])){
          $email=$_POST['email'];
          $password=$_POST['password'];
  
          //envio los datos al model para que los busque en la base de datos
          $this->model->validateUser($email, $password);
          
          
      }
   
      }
  
}
