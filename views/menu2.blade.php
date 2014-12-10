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
            <a href="<?=getPublic();?>/" ><img class="logo" width="70" height="48" src="<?=getPublic();?>/img/sinpla.png" alt=""></a>
                <a class="navbar-brand" href="<?=getPublic();?>/">FoodShot</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
           
                <ul class="nav navbar-nav navbar-right">
                                                 
                     <li class="dropdown">
                     <li>
                        <a href="#">Home</a>
                    </li>
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
                     <li>
                        <a href="#">Seguidores</a>
                    </li>
                      <li>
                        <a href="#">Siguiendo</a>
                    </li>
                   
                       
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Perfil
                        <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <li>
                                <a href="#">Ver Perfil</a>
                            </li>
                            <li>
                                <a href="<?=getPublic();?>/recetas/subireceta">Subir Receta</a>
                            </li>
                            <li>
                                <a href="#">Configuraciones</a>
                            </li>
                            <li>
                                <a href="#">Cerrar sesion</a>
                            </li>
                        </ul>
                    </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>