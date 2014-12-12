
<?php include(ROOT . "/views/header.blade.php");?>
    <div class="container">
        <?php if(getSession('mensaje')){ ?>
            <div class="alert alert-success mensaje-timeout"><?=getAndRemoveSession('mensaje');?></div>
        <?php } ?>
            Lista de Recetas           
            <div class="row">
               <div class="col-md-4">
                    <p>
                    <table class="table">
                        <thead>
                        </thead>
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
                    </table>

                    </p>
                </div>
            </div>
        
    </div>
<?php include( ROOT . "/views/footer.blade.php"); ?>





