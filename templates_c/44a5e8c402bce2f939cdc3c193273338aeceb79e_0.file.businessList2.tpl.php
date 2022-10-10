<?php
/* Smarty version 4.2.1, created on 2022-10-07 21:37:40
  from 'C:\Nueva carpeta\htdocs\Proyectoxamp\TPEspecial\templates\businessList2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63408004589f71_12114806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44a5e8c402bce2f939cdc3c193273338aeceb79e' => 
    array (
      0 => 'C:\\Nueva carpeta\\htdocs\\Proyectoxamp\\TPEspecial\\templates\\businessList2.tpl',
      1 => 1665170519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63408004589f71_12114806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
<h2> Listado  total de productos : </h2>
<table class="table">
<tr class ="table-info"> 
<td class= "table-info"> Id del producto </td>
<td class= "table-info">  producto </td>
<td class= "table-info"> talle </td>
<td class= "table-info"> color </td>
<td class= "table-info"> precio </td>
<td class= "table-info"> Id de la marca </td>
<td class= "table-info"> marca </td>
<td class= "table-info"> Editar</td>
<td class= "table-info"> Eliminar</td>
</tr>

<tr class ="table-info">
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clothes']->value, 'cloth');
$_smarty_tpl->tpl_vars['cloth']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cloth']->value) {
$_smarty_tpl->tpl_vars['cloth']->do_else = false;
?>
   
           <td class= "table-info"> <b>  <?php echo $_smarty_tpl->tpl_vars['cloth']->value->id;?>
</b></td> 
           <td class= "table-info"> <b>  <?php echo $_smarty_tpl->tpl_vars['cloth']->value->description;?>
</b></td>
           <td class= "table-info"> <b>  <?php echo $_smarty_tpl->tpl_vars['cloth']->value->size;?>
</b></td>
           <td class= "table-info"> <b>  <?php echo $_smarty_tpl->tpl_vars['cloth']->value->colour;?>
</b></td>
           <td class= "table-info"> <b>  <?php echo $_smarty_tpl->tpl_vars['cloth']->value->price;?>
</b></td>
           <td class= "table-info"> <b> <?php echo $_smarty_tpl->tpl_vars['cloth']->value->id_brand;?>
</b></td>
           <td class= "table-info"> <b>  <?php echo $_smarty_tpl->tpl_vars['cloth']->value->brand;?>
</b></td>
           <div>
           <td class= "table-info"> <a href='update/<?php echo $_smarty_tpl->tpl_vars['cloth']->value->id;?>
' type='button' class='btn btn-info ml-auto'>Editar</a> </td>
           <td class= "table-info"><a href='delete/<?php echo $_smarty_tpl->tpl_vars['cloth']->value->id;?>
' type='button' class='btn btn-danger ml-auto'>Eliminar</a></td> 
           </div>

</tr>
           
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
</div>

<div class ="row">
<div class="col-7">
<h2> Agregar Items</h2>

<form action= 'add' method="POST" class="my-4">
    
        
            <div class="form-group">
                <label>Articulo</label>
                <input name="descripcion" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label>talle</label>
                <input name="talle" type="text" class="form-control">
            </div>
    </div>
    
    <div class="col-2">

         <div class="form-group">
           <label> Marca (categoria)</label>
           
            <select name = "marca" class="form-control">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['brand']->value->id_brand;?>
"><?php echo $_smarty_tpl->tpl_vars['brand']->value->id_brand;?>
=<?php echo $_smarty_tpl->tpl_vars['brand']->value->brand;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
           </div>

            <div class="form-group">
                <label>color</label>
                <input name="color" type="text" class="form-control">
            </div>
            
            
            <div class="form-group">
            <label>precio</label>
            <input name="precio" type="text" class="form-control">
        </div>

       
        <button type="submit" class="btn btn-warning mt-2">Guardar</button>
            
    </div>
    
    
    </div>

    
    
</form>




<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
