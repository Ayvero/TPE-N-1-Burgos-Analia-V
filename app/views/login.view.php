<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';





class LoginView {
    private $smarty;

    public function __construct() {

        $this->smarty = new Smarty(); //inicializo smarty

        }

      //muestra el formulario para acceder al sitio de administracion
     function showForm(){
        $this->smarty->display('login.tpl');

     }
    }