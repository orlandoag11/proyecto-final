<?php include("header.blade.php"); ?>
  <div class="fondo">
    <div class="container">
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
        <div class="datos">
           <h1>Datos Personales</h1>
        </div> 
        <div class="panel-perfil">   
            <div class="row">            
                <div class="column col-md-12">
                  <?php
                  Form::openForFileUpload("post",getPublic()."/usuarios/actualizaPerfil",$usuario);                
                  ?>
                  <?php Form::field('text','nombre'); ?> 
                  <?php Form::field('text','apellido_paterno'); ?>  
                  <?php Form::field('text','correo'); ?> 
                  <?php Form::field('password','password'); ?> 
                  <?php Form::field('text','profesiones_id'); ?> 
                  <?php Form::field('upload','foto'); ?>              
                  <button type="submit" class="btn btn-default">Guardar</button>
                  <?php Form::close(); ?>
                </div>
            </div>
        </div>   
        <hr>
      </div>
  </div>
  <!--footer-->
<?php include("footer.blade.php"); ?>