<?php include("header.blade.php"); ?>
<div class="container-login">



<h1>FoodShot</h1>
<div class="panel-login">
    <form class="form-horizontal" role="form">
    <div class="letras-log">
    <h3>Iniciar Sesion</h3>
    </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Usuario:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Usuario">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password:</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-login">Iniciar Sesion</button>
          </div>
          <div class="pie-login">
          <hr>
          <p>¿No tienes cuenta? <a  href="<?=getPublic();?>/usuarios/registrarse">Crear Cuenta</a></p>
          </div>
        </div>
      </form>
      </div>
      
</div> 
<?php include("footer.blade.php"); ?>