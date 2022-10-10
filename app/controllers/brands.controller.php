<?php
require_once './app/models/brands.model.php';
require_once './app/views/brands.view.php';
require_once './app/helpers/auth.helper.php';



class brandsController {
    private $model;
    private $view;
    private $helper;
    

    public function __construct() {
        $this->model = new brandsModel();
        $this->view = new brandsView();
        $this->helper= new AuthHelper();
    
    }

    //muestra todas las categorias
    public  function seeAllBrand(){
      $allBrand = $this->model->getAllBrand();
      $this->view->showAllBrand($allBrand);
      }
  

        //muestra los items pertenecientes a una categoria, segun el id pasado por el boton
      public function searchBrand($id){
      $brand = $this->model->searchBrand($id);  // vuelve el arrary desde el select a la lista de productos segun la clave foranea
      $this->view->showBrand($brand);   //envia al view el array
   
  }




       
/*---------------------------- Administracion de categorias------------------------------------------*/



     //se muestra la lista de categorias
     function showCategorias() {
      $this->helper->openSession();
      $categorias = $this->model->getAllCategorias(); //se pide al model que seleccione la lista de la tabla brands
      $this->view->showCategorias($categorias); //se muestran

  
  }

    // se insertan nuevas categorias
      function addBrand(){
        $this->helper->openSession();
    if (!empty ($_GET ['newBrand']) && isset ($_GET ['newBrand'])){ //se validan los datos
  $newBrand = $_GET['newBrand'];
   $this->model->insertBrand($newBrand); // se envian la model para ser insertados
     }else {
      echo "no estan completos los datos";
     }
      header("Location: " . BASE_URL.'adm-categorias' ); //se reenvia a su url
       
     } 
     

          // advertencia antes  de eliminar una categoria 
         function deleteBrand($id) {
          $this->helper->openSession();
         $this->view->alert($id);
         }

   //el boton trae el  id para eliminar la categoria
     function delete2($id){
      $this->helper->openSession();
      $this->model->deleteBrandById($id);
  
      header("Location: " . BASE_URL.'adm-categorias');
     }
  
  
     //editar una categoria
     function upDateBrand($id) { //trae el id desde el boton 
      $this->helper->openSession();
      $upBrand=$this->model->upDateBrandById($id); //lo pasa al model pidiendo cargue en el arreglo la lista de la base de datos
      $this->view->UpDateBrand($upBrand); //lo envia a la vista para que lo cargue a un formulario
      
    }

      // el formulario envia los datos editados llamando a esta funcion
       function EditEndBrand() {
        $this->helper->openSession();
      //   se validan entrada de datos
     if(isset ($_POST ['brand']) ||($_POST ['id'])){
      
      $brand= $_POST['brand'];
      $id= $_POST['id'];
      
      $id = $this->model->editEndBrand2($brand,$id); // se envia al model para que inserte los nuevos datos
    
    
        }else {
      echo "faltan datos";
           }
      
       }

      }
          