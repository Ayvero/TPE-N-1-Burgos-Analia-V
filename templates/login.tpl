{include file=  'header.tpl'}

   <h5> Ingrese su email y contraseña para acceder a la administracion de la pagina</h5>
    <form method ="POST"  action= "auth">
        <div class="form-group">
            <label for="exampleInputEmail1">Email </label>
            <input type="username"  name= "email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
           
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password"  name = "password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
{include  file= 'footer.tpl'}
