<?php

class UserModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=business2;charset=utf8', 'root', '');
    }

    function validateUser($email, $password){

        $query = $this->db->prepare('SELECT * FROM user WHERE email = ?');
        $query->execute([$email]);
        $user = $query->fetch(PDO::FETCH_OBJ);
    
        //Si el usuario existe y las contraseñas coinciden
        if($user && password_verify($password,($user->password))){
        //inicio session
         session_start();

         $_SESSION ['id']= $user->id;         //se carga en la variable session los datos del usuario registrado 
         $_SESSION ['email']= $user->email;
         $_SESSION ['IS_LOGGED']= true;
         
        // se envia  a la pagina autorizada a ver
         header ("Location: ".BASE_URL.'adm-productos');
         

        }else{    //si dicho usuario no esta autenticado :

            echo "Acceso denegado";
            header("Location: ".BASE_URL.'login'); //se le envia de regreso a la pagina de login
        }
    }




}