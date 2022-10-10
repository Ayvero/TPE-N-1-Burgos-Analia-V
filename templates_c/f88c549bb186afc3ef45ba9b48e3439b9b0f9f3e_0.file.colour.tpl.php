<?php
/* Smarty version 4.2.1, created on 2022-10-03 20:36:58
  from 'C:\Nueva carpeta\htdocs\Proyectoxamp\TPEspecial\templates\colour.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633b2bcadddda7_48319487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f88c549bb186afc3ef45ba9b48e3439b9b0f9f3e' => 
    array (
      0 => 'C:\\Nueva carpeta\\htdocs\\Proyectoxamp\\TPEspecial\\templates\\colour.tpl',
      1 => 1664822169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633b2bcadddda7_48319487 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3> productos buscados  por color</h3>



<div class="container">
    
 <ul class="list-group">

 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['colour']->value, 'cloth4');
$_smarty_tpl->tpl_vars['cloth4']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cloth4']->value) {
$_smarty_tpl->tpl_vars['cloth4']->do_else = false;
?>

  <li class ='list-group-item d-flex justify-content-between align-items-center'>
  <span> <b> Articulo:<?php echo $_smarty_tpl->tpl_vars['cloth4']->value->description;?>
</b></span>
  <span> <b> Talle: <?php echo $_smarty_tpl->tpl_vars['cloth4']->value->size;?>
</b> </span>
  <span> <b> Color: <?php echo $_smarty_tpl->tpl_vars['cloth4']->value->colour;?>
</b> </span>
  <span> <b> Precio: <?php echo $_smarty_tpl->tpl_vars['cloth4']->value->price;?>
</b></span>
 
          
  </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</ul>
</div>



      
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
