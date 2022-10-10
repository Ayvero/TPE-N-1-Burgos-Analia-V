<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';




class brandsView {
    private $smarty;

    public function __construct() {

        $this->smarty = new Smarty(); //inicializo smarty
    }

  
    //muestra la lista de categorias
    function showAllBrand($allBrand) {
     
        $this->smarty->assign('allBrand',$allBrand);
        $this->smarty->display('allBrand.tpl');
    }
    
    
        //muestra la lista de item segun el id parado por el boton de las marcas (categorias)
        function showBrand($brand){
        
        $this->smarty->assign('brand',$brand);
        $this->smarty->display('brand.tpl');
    
    }    
        
    


      //se muestra la lista de categorias
    function showCategorias($categorias) {
    
        $this->smarty->assign('categorias',$categorias);
        $this->smarty->display('categorias.tpl');
       
    }

     //se muestra un alert al nintentar borrar una categoria

    function alert($id){
        $this->smarty->assign('id',$id);
        $this->smarty->display('alert.tpl');

    }
     
      // se  envian los datos para insertar al formulario para su edicion
    function upDateBrand($upBrand){
        
        
        $id= $upBrand->id_brand;
        $brand= $upBrand->brand;
       
        $this->smarty->assign('id',$id);
        $this->smarty->assign('brand',$brand);
        
        $this->smarty->display('upDateBrand.tpl');
            
    }
    
    

}
