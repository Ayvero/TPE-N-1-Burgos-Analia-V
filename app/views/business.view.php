<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
require_once './app/helpers/auth.helper.php';





class businessView {
    private $smarty;

    public function __construct() {

        $this->smarty = new Smarty(); //inicializo smarty


        $authHelper = new AuthHelper();
        //$userName = $authHelper->getLoggedUserName();
        
    
        //$this->smarty->assign('basehref', BASE_URL);
       // $this->smarty->assign('userName', $userName);
    }


        

      



  //muestra toda la lista de productos de tabla clothes
   function showClothes1($clothes) {
     
    $this->smarty->assign('clothes',$clothes);
    $this->smarty->display('businessList.tpl');
    }


    //muestra los productos de un id determinado 
    function  showById($itemsId){
    
    $this->smarty->assign('items',$itemsId);
    $this->smarty->display('IdList.tpl');
     }

    

  
    //muestra la lista de productos
   function showClothes($clothes,$brands) { //envia los arrgelos de ambas tablas
     
    $this->smarty->assign('clothes',$clothes);
    $this->smarty->assign('brands',$brands);
    $this->smarty->display('businessList2.tpl');
   
}

        //envia los datos del arreglo para insertar en el formulario a ser editado
    function upDate2($cloth5){
        
        $id= $cloth5->id;            //se asignan variables a cada componente de la tabla
        $idC= $cloth5->id_clothes;
        $des= $cloth5->description;
        $size= $cloth5->size;
        $colour= $cloth5->colour;
        $price= $cloth5->price;
        

        $this->smarty->assign('clothes5',$cloth5);
        $this->smarty->assign('id',$id);
        $this->smarty->assign('idC',$idC);
        $this->smarty->assign('des',$des);
        $this->smarty->assign('size',$size);
        $this->smarty->assign('colour',$colour);
        $this->smarty->assign('price',$price);

        $this->smarty->display('upDate.tpl');
            
    }




        }


        