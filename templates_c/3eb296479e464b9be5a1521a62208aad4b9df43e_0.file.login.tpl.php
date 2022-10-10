<?php
/* Smarty version 4.2.1, created on 2022-10-10 14:54:03
  from 'C:\xampp\htdocs\ProyectoXamp\TPEspecial\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634415ebc19751_15839413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3eb296479e464b9be5a1521a62208aad4b9df43e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoXamp\\TPEspecial\\templates\\login.tpl',
      1 => 1665264635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634415ebc19751_15839413 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   <h5> Ingrese su email y contraseña para acceder a la administracion de la pagina</h5>
    <form method ="POST"  action= "auth">
        <div class="form-group">
            <label for="exampleInputEmail1">Email </label>
            <input type="username"  name= "email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
           
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password"  name = "password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
