<?php
/* Smarty version 4.2.1, created on 2022-10-07 21:40:20
  from 'C:\Nueva carpeta\htdocs\Proyectoxamp\TPEspecial\templates\alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634080a43adf24_81248465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a436644a9ef005a8bc7d046864b0f6ab9ab1f4a' => 
    array (
      0 => 'C:\\Nueva carpeta\\htdocs\\Proyectoxamp\\TPEspecial\\templates\\alert.tpl',
      1 => 1665168376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634080a43adf24_81248465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="alert alert-danger" role="alert">
  Esta a punto de eliminar una categoria entera . Se eliminaran todos los productos de esa categoria!


</div>
<div>
<a href='delete2/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'  type='button' class='btn btn-danger ml-auto'>Eliminar de todos modos</a> 
<a href='list' type='button' class='btn btn-info ml-auto'>cancelar</a>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
