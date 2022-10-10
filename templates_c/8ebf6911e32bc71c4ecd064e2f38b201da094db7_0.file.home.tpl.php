<?php
/* Smarty version 4.2.1, created on 2022-10-05 23:34:39
  from 'C:\Nueva carpeta\htdocs\Proyectoxamp\TPEspecial\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633df86f18d0f8_89880395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ebf6911e32bc71c4ecd064e2f38b201da094db7' => 
    array (
      0 => 'C:\\Nueva carpeta\\htdocs\\Proyectoxamp\\TPEspecial\\templates\\home.tpl',
      1 => 1665005349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 2,
  ),
),false)) {
function content_633df86f18d0f8_89880395 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div>
<a href='productos' type='button' class='btn btn-info ml-auto'>Lista de items</a>
<a href='categorias' type='button' class='btn btn-info ml-auto'>Lista de categorias</a>
<a href='login' type='button' class='btn btn-info ml-auto'>loguin</a>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php }
}
