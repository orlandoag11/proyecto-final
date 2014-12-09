<?php include(ROOT . "/views/header.blade.php"); ?>
    <div class="container-registro">
    <div class="container">
    <div class="row">

      <h1>Crear una Cuenta en Foodshot</h1>

    </div>

     <div class="row">
     <div class="column col-md-6 col-sm-12 col-xs-12">
        <div class="panel-registro">
<p class="registro">Completa los siguientes campos
   </p>
      <?php if(getSession('mensaje')){ ?>
        <div class="alert alert-success mensaje-timeout"><?=getAndRemoveSession('mensaje');?></div>
      <?php } ?>
      <?php 
        if(getSession('errores')){
          $errors = getAndRemoveSession('errores');
      ?>
        <div class="alert alert-danger">
          <?php foreach($errors as $error){ ?>
            <p><?=$error;?></p> 
          <?php } ?>
        </div>
      <?php } ?>
        
         

            <?php
                Form::open("post",getPublic()."/usuarios/guardar");   
                            
            ?> 
                          
              <?php Form::field('text','nombre'); ?>              
              <?php Form::field('text','apellido_paterno'); ?>
              <?php Form::field('text','apellido_materno'); ?>
                <?php Form::field('text','usuario'); ?>  
                 <?php Form::field('text','password'); ?>               
                 <?php Form::field('text','profesiones_id'); ?>      
            
              <div class="btn-guardar">           
              <button type="submit" class="btn btn-registro">Registrarse</button>
              </div>
              <div class="pie-registro">
          <hr>
          <p>¿Si ya tienes cuenta? <a  href="<?=getPublic();?>/usuarios/login">Ingresa Aqui</a></p>
          </div>
            <?php Form::close(); ?>
        
    </div>
     </div>


      <div class="column col-md-6 col-sm-12 col-xs-12">
        
    <div class="wrapper-texto">
      <h2>Solo necesitas una cuenta</h2>
        <img class="mac-imagen" src="<?=getPublic();?>/img/compu.png" alt="">
      </div>
  <div class="wrapper-imagen">
        <h3>Tu información siempre disponible</h3>

Cambia de dispositivo y continúa desde la última acción que hayas realizado.
      </div>
     </div>
          
     </div>


    
    </div>
    </div>
<?php include( ROOT . "/views/footer.blade.php"); ?>





