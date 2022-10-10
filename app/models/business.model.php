<?php

class businessModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=business2;charset=utf8', 'root', '');
    }

    

//muestra toda la lista de productos
    public function getAllClothes1() {
        $query = $this->db->prepare("SELECT * FROM clothes");//selecciono toda la lista de la tabla clothes
        $query->execute();                  //envio la consulta        
        $clothes = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $clothes;  //reenvia el arreglo al controlador
    }

    //busca los datos en base al id pasado en el boton seleccionado 

    function showById($id) {
        $query = $this->db->prepare("SELECT * FROM  clothes JOIN brand ON clothes.id_clothes = brand.id_brand  WHERE id_clothes= ? " );
        $query->execute([$id]);
        $itemsId = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
         
        return $itemsId;
     
     }
//busca todos los item de la tabla clothes (productos) y la tabla brand (categorias)
public function getAllClothes() {
    $query = $this->db->prepare("SELECT * FROM  clothes JOIN brand ON clothes.id_clothes = brand.id_brand   ");
    $query->execute();
    $clothes = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $clothes;//reenvia el arreglo con toda la lista  al controller
    }


    //borra los item segun el id enviado por el boton
    function deleteClothesById($id) {
        $query = $this->db->prepare('DELETE FROM clothes WHERE id = ?');
        $query->execute([$id]);
        
    }

     //edita el item seleccionado segun el id pasado por el boton
    function upDateClothesById($id){
        $sentencia= $this-> db->prepare("SELECT * FROM clothes WHERE id =?;"); //selecciona la lista del producto a editar
        $sentencia->execute([$id]);
        $cloth5= $sentencia->fetch(PDO:: FETCH_OBJ); //lo carga en un arreglo
        return $cloth5; //lo devuelve al controlador
    
    }
    
       // paso 2 del editar: trae los nuevos datos  desde el formulario; ya editados.
    function editEnd2( $des2,$tal2,$col2,$pre2,$id) {
        $sentencia=$this->db->prepare("UPDATE clothes SET   description= ?,size = ?, colour=?,price=?  WHERE id = ?; ");
        $sentencia->execute ([$des2, $tal2, $col2, $pre2, $id]); //pasa  ala base de datos los nuevos datos
        
        header("Location: " . BASE_URL.'adm-productos');  //vuelve a su url
       
        
    }
    
    /**  Inserta una producto en la base de datos.*/
     
    public function insertClothes($marca, $des, $talle, $color, $precio) {
        $query = $this->db->prepare("INSERT INTO clothes (id_clothes,description, size, colour, price) VALUES (?, ?, ?, ?,?)");
        $query->execute([$marca,$des, $talle, $color, $precio]);

        return $this->db->lastInsertId();

        header("Location: " . BASE_URL); 
        
       
    }

      //trae toda la lista de categorias desde la base de datos
    public function getAllCategorias() {
        $query = $this->db->prepare("SELECT * FROM  brand");
       $query->execute();
       $categorias = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
       
       return $categorias;
   }
       
   }


