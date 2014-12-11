<?php include("header.blade.php"); ?>
<div class="container-login">


<!--<img width="280" height="220" src="<?=getPublic();?>/img/logo2.png" alt="">-->
<h1>FoodShot</h1>
<div class="panel-login">
    <div class="form-horizontal">
    <div class="letras-log">
    <h3>Iniciar Sesion</h3>
    </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <?php
                Form::open("post",getPublic()."/usuarios/loginpost");  
            ?>
              <?php Form::field('text','correo'); ?>  
              <?php Form::field('text','password'); ?>                           
                <button type="submit" class="btn btn-default">Iniciar sesion</button>
              <?php Form::close(); ?>
          </div>
        
          <div class="pie-login">
          <hr>
          <p>¿No tienes cuenta? <a  href="<?=getPublic();?>/usuarios/registrarse">Crear Cuenta</a></p>
          </div>
          
        </div>
      
       
      </div>
      </div>
      
</div> 
