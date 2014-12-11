<?php include(ROOT . "/views/header.blade.php"); ?>
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
        <div class="well">
            <?php
              if(isset($escuela)){
                Form::open("post",getPublic()."/escuelas/actualizar",$carrera);   
              }else{
                Form::open("post",getPublic()."/escuelas/guardar");   
              }              
            ?>
              <?php Form::field('text','escuela'); ?>                       
              <button type="submit" class="btn btn-default">Guardar</button>
            <?php Form::close(); ?>
        </div>
    </div>
<?php include( ROOT . "/views/footer.blade.php"); ?>





