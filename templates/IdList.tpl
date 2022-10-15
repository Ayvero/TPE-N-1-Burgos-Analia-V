
{include file="header.tpl"}

<h2> Detalle de productos por id </h2>

<div class="container">

<table class="table">
<tr class ="table-info"> 
<td class= "table-info"> Id del producto </td>
<td class= "table-info">  producto </td>
<td class= "table-info"> talle </td>
<td class= "table-info"> color </td>
<td class= "table-info"> precio </td>
<td class= "table-info"> Id de la marca </td>
<td class= "table-info"> marca </td>
<td class= "table-info"> imagen</td>
</tr>

<tr class ="table-info">
       {foreach  from=$items item=$cloth3 }
   
           <td class= "table-info"> <b>  {$cloth3->id}</b></td> 
           <td class= "table-info"> <b>  {$cloth3->description}</b></td>
           <td class= "table-info"> <b>  {$cloth3->size}</b></td>
           <td class= "table-info"> <b>  {$cloth3->colour}</b></td>
           <td class= "table-info"> <b>  {$cloth3->price}</b></td>
           <td class= "table-info"> <b> {$cloth3->id_brand}</b></td>
           <td class= "table-info"> <b>  {$cloth3->brand}</b></td>
          
          <div class ="row">
           <div class="col-3">
           <td class= "table-info"> <b><img src= "{$cloth3->image}" width=" 350 px "> </b></td>
           </div>
</tr>
           
{/foreach}
</table>
</div>



{include file="footer.tpl"}