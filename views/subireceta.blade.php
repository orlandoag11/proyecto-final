<?php include(ROOT . "/views/header.blade.php"); ?>
    <div class="container-subir-receta">
    <div class="container">
    <div class="row">

      <h1>Subir Receta</h1>

    </div>

     <div class="row">
     <div class="column col-md-6 col-sm-12 col-xs-12">
        <div class="panel-receta">
<p class="registro">DETALLE DE LA RECETA
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
                Form::open("post",getPublic()."/recetas/guardar");   
                            
            ?> 
                          
              <?php Form::field('text','nombre'); ?>              
              <?php Form::field('text','descripcion'); ?>
              <div class="column col-md-6 col-sm-12 col-xs-12">
              <?php Form::field('text','porciones'); ?>
                <?php Form::field('text','comensales'); ?> 
                </div>
                <div class="column col-md-6 col-sm-12 col-xs-12"> 
                 <?php Form::field('text','tiempo_preparacion'); ?>
                 <?php Form::field('text','tiempo_coccion'); ?>
                 </div>  
                 <h3>Contenido de la Receta</h3>
                 <h5>Subir imagen</h5>
                 <input type="file" id="exampleInputFile">
                 <?php Form::field('text','ingredientes'); ?>
                 <?php Form::field('text','instrucciones'); ?> 
                 <div class="column col-md-6 col-sm-12 col-xs-12">  
                 <?php Form::field('text','categorias_id'); ?>
                 </div> 
                 <div class="column col-md-6 col-sm-12 col-xs-12"> 
                 <?php Form::field('select','dificultad'); ?>   
                 </div>                
              <div class="btn-guardar">           
              <button type="submit" class="btn btn-receta">Subir Receta</button>
              </div>
            <?php Form::close(); ?>
        
    </div>
     </div>


     <div class="column col-md-6 col-sm-12 col-xs-12">
        
    <div class="wrapper-texto-rec">
      FoodShot
        <img class="mac-rec" src="<?=getPublic();?>/img/receta.png" alt="">
      </div>
     </div>
          
     </div>


    
    </div>
    </div>
<?php include("footer.blade.php"); ?>