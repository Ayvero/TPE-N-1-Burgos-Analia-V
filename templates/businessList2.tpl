
{include file="header.tpl"}

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
       {foreach  from=$clothes item=$cloth }
   
           <td class= "table-info"> <b>  {$cloth->id}</b></td> 
           <td class= "table-info"> <b>  {$cloth->description}</b></td>
           <td class= "table-info"> <b>  {$cloth->size}</b></td>
           <td class= "table-info"> <b>  {$cloth->colour}</b></td>
           <td class= "table-info"> <b>  {$cloth->price}</b></td>
           <td class= "table-info"> <b> {$cloth->id_brand}</b></td>
           <td class= "table-info"> <b>  {$cloth->brand}</b></td>
           <div>
           <td class= "table-info"> <a href='update/{$cloth->id}' type='button' class='btn btn-info ml-auto'>Editar</a> </td>
           <td class= "table-info"><a href='delete/{$cloth->id}' type='button' class='btn btn-danger ml-auto'>Eliminar</a></td> 
           </div>

</tr>
           
{/foreach}
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
            {foreach from=$brands  item=$brand}
                <option value="{$brand->id_brand}">{$brand->id_brand}={$brand->brand}</option>
            {/foreach}
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




{include file="footer.tpl"}