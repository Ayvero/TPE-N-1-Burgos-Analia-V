<?php
require_once './app/controllers/login.controller.php';





class AuthHelper{
 

  public function __construct() {
    
     
    }
   
     
   //controla si la sesion esta abierta 
  public function openSession(){
    session_start();  //abre sesion
            if(!isset ($_SESSION [ 'IS_LOGGED'])){ //si  no hay un usuario logueado 
             header("Location: " .BASE_URL.'login'); // lo manda al form de loguin
             die(); //corta toda actividad
   
            }
    
  }

     
   //cierra la sesion
  function logout(){
    session_start();
    session_destroy();
    header("Location: ". BASE_URL); //envia al home

    }

  }

