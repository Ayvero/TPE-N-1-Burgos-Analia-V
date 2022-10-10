
{include file="header.tpl"}




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

       {foreach  from=$categorias item=$categ}

  

        <td class= "table-info"><span> <b> * {$categ->id_brand}</b></span></td>
        <td class= "table-info"><span> <b> * {$categ->brand}</b></span></td>
        <td class= "table-info"> <a href='update-brand/{$categ->id_brand}' type='button' class='btn btn-info ml-auto'>EditarMarca</a> </td>
        <td class= "table-info"><a href='delete-brand/{$categ->id_brand}' type='button' class='btn btn-danger ml-auto'>EliminarMarca</a></td> 
           
  </tr>
{/foreach}

</table>


</div>

<!--------------------------------------------------->



