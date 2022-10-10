<?php

class brandsModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=business2;charset=utf8', 'root', '');
    }

    //muestra la lista de categorias traidas desde la tabla brand
   public function getAllBrand() {
        
    $query = $this->db->prepare("SELECT * FROM brand");
    $query->execute();
    $allBrand = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
    
    return $allBrand;
}
 
      //busca la lista de items segun el boton de la categoria seleccionada

    public function searchBrand( $id) { //aqui el id es el de la clave foranea
        $query = $this->db->prepare("SELECT * FROM  clothes JOIN brand ON clothes.id_clothes = brand.id_brand  WHERE id_clothes= ?  ");
         $query->execute([ "$id"]);
         $brand = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
         return $brand;
    }

    



    
/**------------------------categorias---------------------------------- */


     //trae toda la lista de categorias desde la base de datos
    public function getAllCategorias() {
         $query = $this->db->prepare("SELECT * FROM  brand");
        $query->execute();
        $categorias = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $categorias;
    }
    

     //inserta en la tabla brand (categorias) nuevas categorias
    public function insertBrand($newBrand) {
        $query = $this->db->prepare("INSERT INTO brand (brand) VALUES ( ?) ");
        $query->execute([$newBrand]);

        return $this->db->lastInsertId();

         
       
    }

    


    //borra la categoria segun el id enviado por el boton
    function deleteBrandById($id) {
        
        $query = $this->db->prepare('DELETE FROM brand WHERE id_brand = ?');
        $query->execute([$id]);
        
    }

       //tare los datos de la fila a ser modificada
    function upDateBrandById($id){
        $sentencia= $this-> db->prepare("SELECT * FROM brand WHERE id_brand =?;");
        $sentencia->execute([$id]);
        $upBrand= $sentencia->fetch(PDO:: FETCH_OBJ); //envia la lista al controller
        return $upBrand;
    
    }
       //edita los datos en la tabla segun los nuevos parametros enviados
    function editEndBrand2($brand,$id) {
        $sentencia=$this->db->prepare("UPDATE brand SET  brand = ?  WHERE id_brand =?; ");
        $sentencia->execute ([$brand, $id]);
        
        header("Location: " . BASE_URL.'categorias'); 
       
        
    }

}
    