<?php
/* Smarty version 4.2.1, created on 2022-10-10 02:27:58
  from 'C:\xampp\htdocs\ProyectoXamp\TPEspecial\templates\brand.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6343670eb00b38_73829359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9af485f8f3b11642ff6413e4608bc073a65011f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoXamp\\TPEspecial\\templates\\brand.tpl',
      1 => 1665009792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6343670eb00b38_73829359 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<h4> productos por marca</h4>

<div class="container">
    
 <ul class="list-group">

   
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brand']->value, 'brands');
$_smarty_tpl->tpl_vars['brands']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brands']->value) {
$_smarty_tpl->tpl_vars['brands']->do_else = false;
?>

  <li class ='list-group-item d-flex justify-content-between align-items-center'>
  <h5> Marca seleccionada: <?php echo $_smarty_tpl->tpl_vars['brands']->value->brand;?>
 </h5>
           
           <span> <b> Articulo:<?php echo $_smarty_tpl->tpl_vars['brands']->value->description;?>
</b></span>
           <span> <b> Talle: <?php echo $_smarty_tpl->tpl_vars['brands']->value->size;?>
</b> </span>
           <span> <b> Color: <?php echo $_smarty_tpl->tpl_vars['brands']->value->colour;?>
</b> </span>
           <span> <b> Precio: <?php echo $_smarty_tpl->tpl_vars['brands']->value->price;?>
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
