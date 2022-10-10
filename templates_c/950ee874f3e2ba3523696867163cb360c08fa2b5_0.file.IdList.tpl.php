<?php
/* Smarty version 4.2.1, created on 2022-10-10 02:27:11
  from 'C:\xampp\htdocs\ProyectoXamp\TPEspecial\templates\IdList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634366dfdf19f8_66412654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '950ee874f3e2ba3523696867163cb360c08fa2b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoXamp\\TPEspecial\\templates\\IdList.tpl',
      1 => 1665172435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634366dfdf19f8_66412654 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2> Detalle de productos por id </h2>


 <div class="container">
    
 <ul class="list-group">

       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'cloth3');
$_smarty_tpl->tpl_vars['cloth3']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cloth3']->value) {
$_smarty_tpl->tpl_vars['cloth3']->do_else = false;
?>
            

        <li class='list-group-item d-flex justify-content-between align-items-center'>
        <span> <b> Marca (Categoria):<?php echo $_smarty_tpl->tpl_vars['cloth3']->value->brand;?>
</b> </span>
        <span> <b> Articulo:<?php echo $_smarty_tpl->tpl_vars['cloth3']->value->description;?>
</b> </span>
        <span> <b> Talle: <?php echo $_smarty_tpl->tpl_vars['cloth3']->value->size;?>
</b> </span>
        <span> <b> Color: <?php echo $_smarty_tpl->tpl_vars['cloth3']->value->colour;?>
</b> </span>
        <span> <b> Precio: <?php echo $_smarty_tpl->tpl_vars['cloth3']->value->price;?>
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
