<?php
require_once './app/models/business.model.php';
require_once './app/views/business.view.php';
require_once './app/helpers/auth.helper.php';




class businessController
{
  private $model;
  private $view;
  private $helper;


  public function __construct() {

    $this->model = new businessModel();
    $this->view = new businessView();
    $this->helper= new AuthHelper();

  }
     
    //abre el home y muestra  la lista de productos de la tabla "clothes"
      public function showClothes1() {
         $clothes = $this->model->getAllClothes1();//guarda en la variable $clothes el pedido a la base de datos
         $this->view->showClothes1($clothes);//envia la variable al view
  }


        //toma el id del boton "mas detalles" para mostrar un item determinado
       function seeDetail($id){
        
      $itemsId = $this->model->showById($id); //envia el id de la lista para buscar en ambas tablas los datos
      $this->view->showById($itemsId);//pasa al view el array devuelto
  }

  /**-----------------administracion------------ */

    //muestra la lista de productos en conjuncion con la de categorias
    public function showClothes() {
      //barrera
      $this->helper->openSession();
      
       
      $clothes = $this->model->getAllClothes(); //pide al model la lista de la tabla clothes
      $brands = $this->model->getAllCategorias();//pide tambien la lista de la tabla categorias
      
      $this->view->showClothes($clothes,$brands);//envia las dos tablas al view
  
  }


    //inserta nuevos  productos en la tabla
    function addClothes() {
      $this->helper->openSession();
        
    if (isset  ($_POST['marca'])|| ($_POST['descripcion']) || ($_POST['talle'])|| ($_POST['color'])|| ($_POST['precio']) ){
    
    $marca= $_POST ['marca'];  //toma los valores del formulario de "businessList2.tpl"
     $des = $_POST['descripcion'];
     $talle = $_POST['talle'];
     $color = $_POST['color'];
    $precio = $_POST['precio'];
      

     $this->model->insertClothes( $marca,$des,$talle,$color, $precio ); //los envia al model
     
     
     header("Location: " . BASE_URL.'adm-productos'); //regresa a la pagina de los productos
 }
    }

    //elimina  productos  
  function deleteClothes($id) { //toma el id traido por el boton desde "businessList.tpl"
    $this->helper->openSession();

    $this->model->deleteClothesById($id); //lo envia al model

    header("Location: " . BASE_URL.'adm-productos'); //regresa al index

}

     //edita productos de la tabla

   function upDateClothes($id) { //toma el id  del producto del boton
    $this->helper->openSession();
    $cloth5=$this->model->upDateClothesById($id);//lo envia al model  para solicitar que inserte la lista en un form
    $this->view->UpDate2($cloth5);//envia el arreglo con los datos a la vista para meterlos a un form
  
}   

   // se finaliza la edicion:
    function EditEnd() { //el form con los datos editados llama a esta funcion
      
      $this->helper->openSession();

  // se validan entrada de datos
 if(isset ($_POST ['des2']) || ($_POST ['tal2'])||($_POST ['col2'])||($_POST ['pre2'])||($_POST ['id'])){
  $des2= $_POST['des2'];  //datos ya editados
  $tal2= $_POST['tal2'];
  $col2= $_POST['col2'];
  $pre2=$_POST['pre2'];
  $id=$_POST['id'];

  $id = $this->model->editEnd2($des2,$tal2,$col2,$pre2, $id); //se los envia al model para ser insertados a la tabla

    }else {
  echo "faltan datos";
          }
  
       }

       
      }
