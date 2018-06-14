<!--menu bootstrap -->

<nav class="navbar navbar-default">
  <div class="container-fluid navbar_menu contenedor-menu-principal">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">CONTROL DE INVENTARIOS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown navbar_dropdown">
        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Bienvenido ADMINISTRADOR</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"> Mi perfil</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo Conectar::ruta();?>logout.php"><span class="glyphicon glyphicon-off" haria-hidden="true"></span> Cerrar sesión</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>