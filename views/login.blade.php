<?php include("header.blade.php"); ?>
<div class="container">

<div class="espacio-logo">
<h1>FoodShot</h1>
<div class="panel-login">
    <form class="form-horizontal" role="form">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Usuario">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
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
            <button type="submit" class="btn btn-default">Iniciar Sesion</button>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Registrarse</button>
          </div>
        </div>
      </form>
      </div>
      </div>
</div> 
<?php include("footer.blade.php"); ?>