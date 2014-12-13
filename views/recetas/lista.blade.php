
<?php include(ROOT . "/views/header.blade.php");?>
<div class="fondo">
  <div class="container">
    <div class="titulo">
            Recetas Mexicanas
    </div>         
            <div class="row">
               <div class="column col-md-4 col-sm-12 col-xs-12">
                    
                    
                       
                        <tbody>
                          <?php foreach($recetas as $receta){ ?>
                                <div class="panel panel-default">
                                      <img height="77" src="<?=getPublic();?>/img/tempura.jpg" class="img-circle">
                                      <div class="panel-body">
                                        <h4><?php echo $receta->nombre; ?></h4>
                               
                                          <p> <?php echo $receta->descripcion; ?></p>
                                          <a href="<?=getPublic();?>/recetas/receta" class="btn btn-home">Ver mas</a>
                                      </div>
                                </div>
                         <?php } ?>
                        </tbody>
                </div>
                                     
                
            </div>
        
    </div>
  </div>
<?php include( ROOT . "/views/footer.blade.php"); ?>





