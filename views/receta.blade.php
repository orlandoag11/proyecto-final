<?php include("header.blade.php"); ?>
    <div class="fondo">
        <div class="container">
            <hr>
            <h2>Pechugas Rellenas</h2>
            <hr>
            <div class="row">
                <div class="column col-md-6 col-sm-12 col-xs-12">
                    <!-- Page Heading/Breadcrumbs -->
                    <div class="receta-calificacion">
                        <ol class="puntuacion">
                            <li class="active">Puntuacion</li>
                        </ol>
                    </div>
                    <img class="img-responsive" src="<?=getPublic();?>/img/pechuga.png" alt="">
                </div>
                 <div class="col-md-6 col-sm-12 col-xs-12">
                    <h2>Ingredientes</h2>
                    <p>* 5 mitades de pechuga de pollo, sin piel ni hueso</p>
                    <p>* sal al gusto</p>
                    <p>* 5 rebanadas de jamón</p>
                    <p>* 5 rebanadas de queso amarillo</p>
                    <p>* 1/3 taza de harina de trigo</p>
                    <p>* 3 huevos, ligeramente batidosp   </p>
                    <p>* 1/2 taza de pan molido</p>
                    <p>* 1/4 taza de aceite comestible</p>
                    <div class="caja-comentar">
                        <label for="inputEmail3" class="comentario control-label">Comentario</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Comentar">
                        </div>
                    </div>
                </div>
                <div class="preparacion">
                    <h2>Preparacion</h2>
                    <p>1.- Aplana las pechugas de pollo y sazona con sal y pimienta. Coloca sobre cada una de ellas una rebanada de jamón y una de queso amarillo. Enrolla y prende con un palillo.</p>
                    <p>2.- Pasa las pechugas rellenas por harina, sacudiendo el exceso. Humedece con el huevo batido, luego revuelca en el pan molido cubriéndolas completamente.</p>
                    <p>3.- Calienta suficiente aceite en un sartén grande a fuego medio. Cuando el aceite esté bien caliente, agrega las pechugas empanizadas y fríe hasta que se hayan dorado.</p>
                </div>
            </div>
        </div>
    </div>
<?php include("footer.blade.php"); ?>