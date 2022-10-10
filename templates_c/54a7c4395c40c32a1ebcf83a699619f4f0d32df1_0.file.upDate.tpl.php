<?php
/* Smarty version 4.2.1, created on 2022-10-10 17:10:12
  from 'C:\xampp\htdocs\ProyectoXamp\TPEspecial\templates\upDate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634435d4a36d43_24117496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54a7c4395c40c32a1ebcf83a699619f4f0d32df1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoXamp\\TPEspecial\\templates\\upDate.tpl',
      1 => 1665414540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634435d4a36d43_24117496 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Actualizar productos</h1>
            
            
                
                <form method="POST" action= "edit-end";>
            <table class="table">
            <td><input type = "hidden" name= "id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"  id="id"></td>
            
                <tr class="table-info">
                <td class="table-info">descripcion</td>
                    <td><input type = "text" name= "des2"  value="<?php echo $_smarty_tpl->tpl_vars['des']->value;?>
" id="des2" ></td>
                </tr>
                <tr class="table-info">
                <td class="table-info">talle</td>
                    <td><input type = "text" name= "tal2"  value="<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
" id="tal2" ></td>
                </tr>
                <tr class="table-info">
                <td class="table-info">color</td>
                    <td><input type = "text" name= "col2"  value="<?php echo $_smarty_tpl->tpl_vars['colour']->value;?>
"  id="col2"></td>
                </tr>
                <tr class="table-info">
                <td class="table-info">precio</td>
                    <td><input type = "text" name= "pre2"  value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
" id="pre2" ></td>
                
                
                
                
               
                <tr class="table-info">
                <td><button ><input type ="submit"   class =" btb-btn-info"  value=" Editar producto"></button></td>
                
                </tr>
            </table>
        </form>
    
 <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
