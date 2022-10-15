
{include file="header.tpl"}

<h2> Listado  total de productos : </h2>


 <div class="container">
    
 <ul class="list-group">

       {foreach  from=$clothes item=$cloth }

  <li class ='list-group-item d-flex justify-content-between align-items-center'>

           
           <span> <b> Articulo:{$cloth->description}</b></span>
           <span> <b> Talle: {$cloth->size}</b> </span>
           <span> <b> Color: {$cloth->colour}</b> </span>
           <span> <b> Precio: {$cloth->price}</b></span>
           <a href='detail/ {$cloth->id}' type='button' class='btn btn-info ml-auto'>detalles</a> 
           
           </li>
{/foreach}

</ul>
</div>



{include file="footer.tpl"}