<?php
/* Smarty version 4.2.1, created on 2022-10-10 02:27:49
  from 'C:\xampp\htdocs\ProyectoXamp\TPEspecial\templates\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634367051c4b13_31360305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18cb47b773a38a273b37b7309b876c3f75992377' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoXamp\\TPEspecial\\templates\\categorias.tpl',
      1 => 1665177417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634367051c4b13_31360305 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<div class="row">
<div class="col-3">
<h4> Agregar categorias</h4>


<form action= 'add-brand' method="GET" class="my-4">

    <div class="form-group">
        <label>Nueva Marca</label>
        <input name="newBrand" type="text" class="form-control">
        <button type="submit" class="btn btn-warning mt-2">Agregar marca</button>
        </form>
    </div>
    </div>
    
    <!------------------------------------------->
   
    
<div class="container">
<h3> Todas las marcas (categorias)</h3>
<table class="table">
<tr class ="table-info"> 
<td class= "table-info"> Id de la marca </td>
<td class= "table-info">  Marca </td>
<td class= "table-info"> Editar marca</td>
<td class= "table-info"> Eliminar marca</td>
</tr>


<tr class ="table-info">

       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categ');
$_smarty_tpl->tpl_vars['categ']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categ']->value) {
$_smarty_tpl->tpl_vars['categ']->do_else = false;
?>

  

        <td class= "table-info"><span> <b> * <?php echo $_smarty_tpl->tpl_vars['categ']->value->id_brand;?>
</b></span></td>
        <td class= "table-info"><span> <b> * <?php echo $_smarty_tpl->tpl_vars['categ']->value->brand;?>
</b></span></td>
        <td class= "table-info"> <a href='update-brand/<?php echo $_smarty_tpl->tpl_vars['categ']->value->id_brand;?>
' type='button' class='btn btn-info ml-auto'>EditarMarca</a> </td>
        <td class= "table-info"><a href='delete-brand/<?php echo $_smarty_tpl->tpl_vars['categ']->value->id_brand;?>
' type='button' class='btn btn-danger ml-auto'>EliminarMarca</a></td> 
           
  </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table>


</div>

<!--------------------------------------------------->



<?php }
}
