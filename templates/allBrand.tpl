{include file="header.tpl"}






<div class ="container">


 <ul class="list-group">
 <h3> Todas las marcas (categorias)</h3>

       {foreach  from=$allBrand item=$cloth5 }

  <li class ='list-group-item d-flex justify-content-between align-items-center'>

           
           <span> <b> * {$cloth5->brand}</b></span>
           <a href='item-categoria/ {$cloth5->id_brand}' type='button' class='btn btn-warning ml-auto'>items segun categoria</a> 
           
  </li>
{/foreach}

</ul>
</div>


{include file="footer.tpl"}