<?php
/* Smarty version 4.2.1, created on 2022-10-08 01:43:44
  from 'C:\Nueva carpeta\htdocs\Proyectoxamp\TPEspecial\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6340b9b0d60a06_17314864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed2fed064c4d2c6159937f558230ee713147fd2a' => 
    array (
      0 => 'C:\\Nueva carpeta\\htdocs\\Proyectoxamp\\TPEspecial\\templates\\header.tpl',
      1 => 1665184263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6340b9b0d60a06_17314864 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Practico Especial N° 1  </title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-ligth bg-ligth">
            <div class="container-fluid">
              <a class="navbar-brand" href=""> Clothes & Marcas </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="list">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="categorias">categorias</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="login">login</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="administracion" role="button" aria-expanded="false">Administracion</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="adm-productos">Productos</a></li>
                  <li><a class="dropdown-item" href="adm-categorias">Categorias</a></li>
                  <li><a class="dropdown-item" href="logout">Cerrar sesion</a></li>
                 </li>
                  </ul>
        <!--
                  <div class="navbar-nav">
            <a class="nav-item nav-link" href="ver">Tareas</a>
        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['userName']->value))) {?>
         <div class="navbar-nav ml-auto">
            <span class="navbar-text"><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</span>
            <a class="nav-item nav-link" href="logout">LOGOUT</a>
        </div>
        <?php }?>
        -->
    </div>
    </nav>


              </ul>
              </div>
              </div>
          </nav>
    </header>

    <!-- inicio main container -->
    
                <main class="container">
<?php }
}
