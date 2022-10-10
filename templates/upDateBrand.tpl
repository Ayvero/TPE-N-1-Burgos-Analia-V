
{include file = "header.tpl"}

<h1>Actualizar marcas (categorias)</h1>
            
            
                
                <form method="POST" action= "edit-end-brand";>
            <table class="table">
            <td><input type = "hidden" name= "id" value="{$id}"  id="id"></td>
           
            
                <tr class="table-info">
                <td class="table-info">Marca</td>
                    <td><input type = "text" name= "brand"  value="{$brand}" id="brand" ></td>
                </tr>
                
                <tr class="table-info">
                <td><button ><input type ="submit"   class =" btb-btn-info"  value=" Editar marca"></button></td>
                
                </tr>
            </table>
        </form>
    
 {include file = "footer.tpl"}