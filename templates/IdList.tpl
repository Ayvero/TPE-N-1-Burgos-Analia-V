
{include file="header.tpl"}

<h2> Detalle de productos por id </h2>


 <div class="container">
    
 <ul class="list-group">

       {foreach from=$items item=$cloth3 }
            

        <li class='list-group-item d-flex justify-content-between align-items-center'>
        <span> <b> Marca (Categoria):{$cloth3->brand}</b> </span>
        <span> <b> Articulo:{$cloth3->description}</b> </span>
        <span> <b> Talle: {$cloth3->size}</b> </span>
        <span> <b> Color: {$cloth3->colour}</b> </span>
        <span> <b> Precio: {$cloth3->price}</b></span>
</li>
{/foreach}

</ul>
</div>

{include file="footer.tpl"}