<?php
require_once './app/controllers/business.controller.php';
require_once './app/controllers/brands.controller.php';
require_once './app/controllers/login.controller.php';
require_once './app/helpers/auth.helper.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'list'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion 
$params = explode('/', $action);


$businessController = new businessController(); // instancio el  controller de tabla clothes
$brandsController = new brandsController();// instancio el  controller de tabla brand
$loginController = new LoginController();// instancio el  controller de login
$authHelper = new AuthHelper();// instancio el  helper para manejar las sessiones






// tabla de ruteo
switch ($params[0]) {

    
    case 'login':
        $loginController->login(); //muestro el form de login
            break;
    case 'auth':
        $loginController->validate(); //valido los datos del login
            break; 
            
    case 'logout':
        $authHelper->logout();

    
    case 'list': //llamo al home de la pagina
        $businessController->showClothes1(); //muestro la lista de productos
        break;
        

    case 'detail': //llamo a mostrar detalles con el boton segun id del item de "businessList.tpl"
    $id= $params[1];
    $businessController->seeDetail($id); //muestro detalles del item
    break;
   
    case 'categorias':    //lamo desde el nav a la lista de categorias
        $brandsController->seeAllBrand(); //muestro la lista 
     break;

     case 'item-categoria':  //llamo a un item segun el id pasado por boton de la lista de categorias
        $id= $params[1];
        $brandsController->searchBrand($id); //muestro la lista de items correspondientes 
        break;                                 // a esa categoria .
    

/**-----------administrador- de productos----------- */

     case 'administracion':
        $businessController->showClothes();
         break;

     case 'adm-productos':
    $businessController->showClothes();
    break;

    case 'add':
        $businessController->addClothes();
        break;


 case 'delete':
        // obtengo el parametro de la acción
    $id= $params[1];
    $businessController->deleteClothes($id);
        break;

 case 'update':
    $id = $params[1];
    $businessController->upDateClothes($id);
      break;

case 'edit-end':
   $businessController->editEnd();
            
    break;


//edicion de las categorias-----------------

 //ver las categorias
  case 'adm-categorias':
     $brandsController->showCategorias();
     break;
//añadir nuevas categorias
 case 'add-brand':
        $brandsController->addBrand();
        break;


case 'delete-brand' :
    $id = $params[1];
     $brandsController->deleteBrand($id);
        break;

 case  'delete2':
 $id = $params[1];
 $brandsController->delete2($id);  
            break;  
        

//editar las categorias         
case 'update-brand' :
    $id = $params[1];
    $brandsController->upDateBrand($id);
    break;
//metodo final para edicion
    case 'edit-end-brand':
        $brandsController->editEndBrand();
                 
         break;    
         
    default:
        echo('404 Page not found');
        break;
}
