<?php
/* Smarty version 4.2.1, created on 2022-10-07 21:37:28
  from 'C:\Nueva carpeta\htdocs\Proyectoxamp\TPEspecial\templates\allBrand.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63407ff82de618_80200268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40ae49992e64cf12baba479c8b46da5937a4f018' => 
    array (
      0 => 'C:\\Nueva carpeta\\htdocs\\Proyectoxamp\\TPEspecial\\templates\\allBrand.tpl',
      1 => 1665013792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63407ff82de618_80200268 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>






<div class ="container">


 <ul class="list-group">
 <h3> Todas las marcas (categorias)</h3>

       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allBrand']->value, 'cloth5');
$_smarty_tpl->tpl_vars['cloth5']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cloth5']->value) {
$_smarty_tpl->tpl_vars['cloth5']->do_else = false;
?>

  <li class ='list-group-item d-flex justify-content-between align-items-center'>

           
           <span> <b> * <?php echo $_smarty_tpl->tpl_vars['cloth5']->value->brand;?>
</b></span>
           <a href='item-categoria/ <?php echo $_smarty_tpl->tpl_vars['cloth5']->value->id_brand;?>
' type='button' class='btn btn-warning ml-auto'>items segun categoria</a> 
           
  </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</ul>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
