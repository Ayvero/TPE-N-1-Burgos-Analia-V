<?php
/* Smarty version 4.2.1, created on 2022-10-07 21:56:38
  from 'C:\Nueva carpeta\htdocs\Proyectoxamp\TPEspecial\templates\upDateBrand.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63408476c0b3f2_56905088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '806227c75d25e71eb80c2b568459d1ab04c7441a' => 
    array (
      0 => 'C:\\Nueva carpeta\\htdocs\\Proyectoxamp\\TPEspecial\\templates\\upDateBrand.tpl',
      1 => 1665164764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63408476c0b3f2_56905088 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Actualizar marcas (categorias)</h1>
            
            
                
                <form method="POST" action= "edit-end-brand";>
            <table class="table">
            <td><input type = "hidden" name= "id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"  id="id"></td>
           
            
                <tr class="table-info">
                <td class="table-info">Marca</td>
                    <td><input type = "text" name= "brand"  value="<?php echo $_smarty_tpl->tpl_vars['brand']->value;?>
" id="brand" ></td>
                </tr>
                
                <tr class="table-info">
                <td><button ><input type ="submit"   class =" btb-btn-info"  value=" Editar marca"></button></td>
                
                </tr>
            </table>
        </form>
    
 <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
