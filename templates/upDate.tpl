{include file = "header.tpl"}

<h1>Actualizar productos</h1>
            
            
                
                <form method="POST" action= "edit-end";>
            <table class="table">
            <td><input type = "hidden" name= "id" value="{$id}"  id="id"></td>
            
                <tr class="table-info">
                <td class="table-info">descripcion</td>
                    <td><input type = "text" name= "des2"  value="{$des}" id="des2" ></td>
                </tr>
                <tr class="table-info">
                <td class="table-info">talle</td>
                    <td><input type = "text" name= "tal2"  value="{$size}" id="tal2" ></td>
                </tr>
                <tr class="table-info">
                <td class="table-info">color</td>
                    <td><input type = "text" name= "col2"  value="{$colour}"  id="col2"></td>
                </tr>
                <tr class="table-info">
                <td class="table-info">precio</td>
                    <td><input type = "text" name= "pre2"  value="{$price}" id="pre2" ></td>
                
                
                
                
               
                <tr class="table-info">
                <td><button ><input type ="submit"   class =" btb-btn-info"  value=" Editar producto"></button></td>
                
                </tr>
            </table>
        </form>
    
 {include file = "footer.tpl"}