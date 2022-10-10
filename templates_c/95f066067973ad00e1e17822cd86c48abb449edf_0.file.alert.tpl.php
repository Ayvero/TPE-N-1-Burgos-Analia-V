<?php
/* Smarty version 4.2.1, created on 2022-10-10 17:07:41
  from 'C:\xampp\htdocs\ProyectoXamp\TPEspecial\templates\alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6344353dae6c44_72899152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95f066067973ad00e1e17822cd86c48abb449edf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoXamp\\TPEspecial\\templates\\alert.tpl',
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
function content_6344353dae6c44_72899152 (Smarty_Internal_Template $_smarty_tpl) {
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
