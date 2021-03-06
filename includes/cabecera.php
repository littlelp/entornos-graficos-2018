<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="postres, tortas, dulce, eventos, chocolateria" lang="es" />
	<meta name="keywords" content="postres, tortas, dulce, eventos, chocolateria" lang="es" />
	<meta name="copyright" content="2018, La Chocolatería" lang="es" />
	<meta name="author" content="La Chocolatería" lang="es" />
	<meta name="robots" content="all" />

    <title>La Chocolateria</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">

	<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

	<link href="img/chocolateria.ico" rel="shortcut icon" type="image/x-icon">
	 <!-- JQuery -->
	 <script  src="js/jquery-2.2.3.min.js"></script>
	<script src="validaciones.js" ></script>
</head>

<body>
	<?php
include("includes/conexion.php");

$url = explode("/",$_SERVER["REQUEST_URI"]);
$activo = end($url);


?>



    <!-- SCRIPTS -->

   

    <!-- Bootstrap tooltips -->
    <script  src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script  src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script  src="js/mdb.min.js"></script>


    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.6&appId=204300386269494";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <!-- Start your project here-->


<!-- Modal Login -->
<div class="modal fade modal-ext" id="modal-login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3><i class="fa fa-user"></i> Login</h3>
            </div>

            <!--Body-->
			<form id="formLogin" name= "formLogin" action="login.php" method="post">
				<div class="modal-body">
					<div class="md-form">
						<i class="fa fa-user prefix"></i>
						<input type="text" name="user" id= "user" class="form-control">
						<label for="user">Usuario</label>
					</div>

					<div class="md-form">
						<i class="fa fa-lock prefix"></i>
						<input type="password" name="pass" id="pass" class="form-control">
						<label for="pass">Contraseña</label>
					</div>
					<div class="text-xs-center">
						<button type="submit" id="btnFormLogin" class="btn btn-primary btn-lg">Acceder</button>
					</div>
				</div>
            </form>
            <!--Footer-->
            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>

<!-- Modal Registro -->
<div class="modal fade modal-ext" id="modal-registarse" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3><i class="fa fa-user"></i> Registrarse</h3>
            </div>

            <!--Body-->
			<form id="formRegistrarse" name= "formRegistrarse" action="registrarse.php" method="post">
				<div class="modal-body">
				<div class="md-form">
                        <i class="fa  fa-male  prefix"></i>
                        <input  type="text" name="Nombre" class="form-control validate" maxlength="30" required>
                        <label for="Nombre">Nombre:</label>
                    </div>
                    <div class="md-form">
                        <i class="fa  fa-male  prefix"></i>
                        <input type="text" name="Apellido" class="form-control validate" maxlength="30" required>
                        <label for="Apellido">Apellido:</label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-envelope prefix"></i>
                        <input type="email" name="Email" class="form-control validate" maxlength="40" required>
                        <label for="Email">E-Mail:</label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-user prefix"></i>
                        <input type="text" name="usuario" class="form-control validate" maxlength="20" required>
                        <label for="Usuario">Usuario:</label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-key prefix"></i>
                        <input type="password" name="contrasena" class="form-control validate" maxlength="20" required>
                        <label for="contrasena">Contraseña:</label>
                    </div>
					<div class="text-xs-center">
						<button type="submit" id="btnFormRegistrarse" class="btn btn-primary btn-lg">Registarse</button>
					</div>
				</div>
            </form>
            <!--Footer-->
            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>


	<div class= "container-fluid" id="cabecera">
		<?php
		$sql1 = "select imagencabecera from web";

				$rs1 = mysqli_query($db, $sql1);

					while ($r = mysqli_fetch_array($rs1) ) {

		?>

		<a href="index.php" ><img  src="<?php echo $r["imagencabecera"];?>" style="width:100%" alt="Imagen Cabecera La Chocolatería" class ="center-block img-responsive"></a>

					<?php }?>



		<div style="clear:both;"></div>

		<div id="menu">
				<nav class="navbar navbar-dark light-blue">


					<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx2">
						<i class="fa fa-bars"></i>
					</button>

					<div class="container">

						<!--Collapse content-->
						<div class="collapse navbar-toggleable-xs" id="collapseEx2">
							<!--Navbar Brand-->
							<a class="navbar-brand" href="index.php">La Chocolateria</a>
							<!--Links-->
							<ul class="nav navbar-nav">
								<li class="nav-item <?php if ($activo == 'empresa.php'){echo 'active';}?>">
									<a class="nav-link" href="empresa.php">La empresa<span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item <?php if ($activo == 'novedades.php'){echo 'active';} ?>">
									<a class="nav-link" href="novedades.php">Novedades</a>
								</li>
								<li class="nav-item <?php if ($activo == 'productos.php'){echo 'active';} ?> dropdown">
									<a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenu1">
									<?php
									$sqlmenu = "Select idCategoria, nombre FROM categoria";

									$rsmenu = mysqli_query($db, $sqlmenu);


									while ($filamenu = mysqli_fetch_array($rsmenu))
										{?>
											 <a class="dropdown-item" href="productos.php?cat=<?php echo $filamenu['idCategoria'];?>"><?php echo $filamenu['nombre'];?></a>

										<?php } ?>


									</div>
								</li>
								<li class="nav-item <?php if ($activo == 'contacto.php'){echo 'active';} ?>">
									<a class="nav-link" href="contacto.php">Contactenos</a>
								</li>

								<?php
									if(isset($_SESSION['tipous'])){

									if($_SESSION['tipous']>1){

									?>
									<li class="nav-item <?php if ($activo == 'listaprecios.php'){echo 'active';} ?>">
										<a class="nav-link" href="listaprecios.php">Lista de Precios</a>
									</li>

									<li class="nav-item <?php if ($activo == 'precios-mayoristas.php'){echo 'active';} ?>">
										<a class="nav-link" href="precios-mayoristas.php">Consulta Precio Mayorista</a>
									</li>

										<?php

									}
								}

								if(isset($_SESSION['tipous'])){

									if($_SESSION['tipous']==1){

									?>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administracion</a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenu1">
										<a class="dropdown-item" href="listar-productos.php">Productos</a>
										<a class="dropdown-item" href="listar-categorias.php">Categorias</a>
										<a class="dropdown-item" href="listar-usuarios.php">Usuarios</a>
										<a class="dropdown-item" href="listar-mis-pedidos.php">Pedidos</a>
										<a class="dropdown-item" href="listar-consultas-mayoristas.php">Consultas Mayoristas</a>
										<a class="dropdown-item" href="contenidoweb.php">Contenido Web</a>

									</div>
								</li>
								<?php
									}}

								?>


							<!--Search form-->
									<?php
									if(isset($_SESSION['tipous'])){

									if($_SESSION['tipous']>0){

									?>
									<?php if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0) { 
										$cantidad = 0;
										foreach($_SESSION['carrito'] as $i => $producto) {
											$cantidad = $cantidad + $producto['cantidad'];
										}?>
										<li class="nav-item carrito" style="margin-top: 6px;">
											<a class="fa fa-shopping-cart icon-carrito" href="listar-carrito.php"><a class="number-carrito"><?php echo $cantidad ?></a></a>
										</li>										
									<?php } ?>	
									<li class="nav-item dropdown cerrar-sesion">																			
										<a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hola, <?php echo $_SESSION['nombre'];?> </a>
										<div class="dropdown-menu" aria-labelledby="dropdownMenu1">
											<?php if($_SESSION['tipous']>1){ ?>
											<a class="dropdown-item" href="listar-consultas-mayoristas.php">Mis Consultas</a>
											<a class="dropdown-item" href="listar-mis-pedidos.php">Mis Pedidos</a>
											<?php } ?>
											<a class="dropdown-item" href="mi-perfil.php">Mi Perfil</a>
											<a class="dropdown-item" href="cerrar-sesion.php">Cerrar Sesion</a>
										</div>
									</li>
									
							</ul>
									<?php
									}}
									else {
									?>
							</ul>

								<button type="button" class="btn btn-success" id="botonlogin" data-toggle="modal" data-target="#modal-login">Acceder</button>
								<button type="button" class="btn btn-success" id="botonregistro" data-toggle="modal" data-target="#modal-registarse">Registarse</button>
							<?php
									}

									?>
						<!--/.Collapse content-->
								</div>
					</div>
				</nav>

		</div>
		<div style="clear:both;"></div>
	</div>
