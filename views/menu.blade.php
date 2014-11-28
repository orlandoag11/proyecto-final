    <!-- Navigation -->
    <div class="col-lg-6">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Buscar">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">ir!</button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
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

                <a class="navbar-brand" href="index.html">FoodShot</a>

  
             <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recetas Por Categoria<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?=getPublic();?>/carreras/agregar">Mexicanas</a></li>
                            <li><a href="<?=getPublic();?>/carreras/lista">Italianas</a></li>
                            <li><a href="<?=getPublic();?>/carreras/agregar">Francesas</a></li>
                            <li><a href="<?=getPublic();?>/carreras/lista">Chinas</a></li>
                            <li><a href="<?=getPublic();?>/carreras/agregar">Americanas</a></li>
                            <li><a href="<?=getPublic();?>/carreras/lista">Japonesas</a></li>
                            <li><a href="<?=getPublic();?>/carreras/lista">otras...</a></li>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Videos</a>
                    </li> 
            </ul>
            </div>
          
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                    <li class="dropdown">
                        <a href="<?=getPublic();?>/login/login">Iniciar session</a>
                    </li>
                    <li class="dropdown">
                        <a href="#">Registrarse</a>
                    </li>                                                                              
                </ul>
            </div>
           
            <!-- /.navbar-collapse -->
        </div>
  <!-- /.container -->
    </nav>
   
