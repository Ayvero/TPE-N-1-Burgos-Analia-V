{include file="header.tpl"}




<h4> productos por marca</h4>

<div class="container">
    
 <ul class="list-group">

   
       {foreach from=$brand item=$brands }

  <li class ='list-group-item d-flex justify-content-between align-items-center'>
  <h5> Marca seleccionada: {$brands->brand} </h5>
           
           <span> <b> Articulo:{$brands->description}</b></span>
           <span> <b> Talle: {$brands->size}</b> </span>
           <span> <b> Color: {$brands->colour}</b> </span>
           <span> <b> Precio: {$brands->price}</b></span>
          
  </li>
{/foreach}

</ul>
</div>

{include file="footer.tpl"}