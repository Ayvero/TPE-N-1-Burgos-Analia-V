<?php
//require_once './app/models/user.model.php';
//require_once './app/views/login.view.php';
require_once './app/controllers/login.controller.php';





class AuthHelper{
  //private $model;
 // private $view;


  public function __construct() {
    
     
    //$this->model = new userModel();
    //$this->view = new loginView();
  }


  public function openSession(){
    session_start();
            if(!isset ($_SESSION [ 'IS_LOGGED'])){
             header("Location: " .BASE_URL.'login');
             die();
   
            }
    
  }

  function logout(){
    session_start();
    session_destroy();
    header("Location: ". BASE_URL);

    }

  }

