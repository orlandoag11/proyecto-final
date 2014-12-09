    <!-- Navigation -->
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <img width="70" height="48" src="<?=getPublic();?>/img/logo-chico.png" alt="">
                <a class="navbar-brand" href="<?=getPublic();?>/">FoodShot</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <div class="caja-buscar">
    <div class="input-group">
      <input type="text" class="form-control">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Buscar</button>
      </span>
    </div><!-- /input-group -->
  </div>
                <ul class="nav navbar-nav navbar-right">
                                                 
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recetas por categoria 
                        <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Mexicanas</a>
                            </li>
                            <li>
                                <a href="#">Japonesas</a>
                            </li>
                            <li>
                                <a href="#">Chinas</a>
                            </li>
                            <li>
                                <a href="#">Francesas</a>
                            </li>
                            <li>
                                <a href="#">Italianas</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                     <li>
                        <a href="#">Videos</a>
                    </li>
                      <li>
                        <a href="<?=getPublic();?>/usuarios/login">Iniciar de Sesion</a>
                    </li>
                     <li>
                        <a href="<?=getPublic();?>/usuarios/registrarse">Registrarse</a>
                    </li>
                   
                       
                    </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>