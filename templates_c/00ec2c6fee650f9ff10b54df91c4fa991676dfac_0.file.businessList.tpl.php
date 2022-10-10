<?php
/* Smarty version 4.2.1, created on 2022-10-07 22:59:37
  from 'C:\Nueva carpeta\htdocs\Proyectoxamp\TPEspecial\templates\businessList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634093394446f6_15756597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00ec2c6fee650f9ff10b54df91c4fa991676dfac' => 
    array (
      0 => 'C:\\Nueva carpeta\\htdocs\\Proyectoxamp\\TPEspecial\\templates\\businessList.tpl',
      1 => 1665176369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634093394446f6_15756597 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2> Listado  total de productos : </h2>


 <div class="container">
    
 <ul class="list-group">

       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clothes']->value, 'cloth');
$_smarty_tpl->tpl_vars['cloth']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cloth']->value) {
$_smarty_tpl->tpl_vars['cloth']->do_else = false;
?>

  <li class ='list-group-item d-flex justify-content-between align-items-center'>

           
           <span> <b> Articulo:<?php echo $_smarty_tpl->tpl_vars['cloth']->value->description;?>
</b></span>
           <span> <b> Talle: <?php echo $_smarty_tpl->tpl_vars['cloth']->value->size;?>
</b> </span>
           <span> <b> Color: <?php echo $_smarty_tpl->tpl_vars['cloth']->value->colour;?>
</b> </span>
           <span> <b> Precio: <?php echo $_smarty_tpl->tpl_vars['cloth']->value->price;?>
</b></span>
           <a href='detail/ <?php echo $_smarty_tpl->tpl_vars['cloth']->value->id_clothes;?>
' type='button' class='btn btn-info ml-auto'>detalles</a> 
           
           </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</ul>
</div>



<!--mostrar todas las categorias

<h3> Mostrar todas las marcas </h3>

<a href='see-brands'  type='button' class='btn btn-info ml-auto'>ver todas las categorias</a>
-->


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
