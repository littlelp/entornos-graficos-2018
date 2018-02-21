<!DOCTYPE html>
<!-- Desarrollado Por: Damian Moreiro: moreirodamian@gmail.com  -->
<html lang="es">

<head>


    <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="ntg, pastas, panquequeras, ventas, tarteletas" lang="es" />
	<meta name="keywords" content="pastas, panqueques, rufino, panquequera, maquinas, ntv, ventas, tarteleteras, rabioleras, industria" lang="es" />
	<meta name="copyright" content="2016, ntgpastas.com" lang="es" />
	<meta name="author" content="Gabriel Rodriguez" lang="es" />
	<meta name="robots" content="all" />

    <title>NTG Pastas</title>

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

	<link href="img/logoempresa.ico" rel="shortcut icon" type="image/x-icon">

</head>

<body>
	<?php
include("includes/conexion.php");
session_start();

$url = explode("/",$_SERVER["REQUEST_URI"]);
$activo = end($url);


?>



    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>


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
<div class="modal fade modal-ext" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
			<form action="login.php" method="post">
				<div class="modal-body">
					<div class="md-form">
						<i class="fa fa-user prefix"></i>
						<input type="text" name="user" class="form-control">
						<label for="user">Usuario</label>
					</div>

					<div class="md-form">
						<i class="fa fa-lock prefix"></i>
						<input type="password" name="pass" class="form-control">
						<label for="pass">Contraseña</label>
					</div>
					<div class="text-xs-center">
						<button type="submit" class="btn btn-primary btn-lg">Acceder</button>
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

		<a href="index.php" ><img  src="<?php echo $r["imagencabecera"];?>" style="width:100%" alt="Imagemn Cabecera NTG PASTAS" class ="center-block img-responsive"></a>

					<?php }?>



		<div style="clear:both;"></div>

		<div id="menu">
				<nav class="navbar navbar-dark black">


					<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx2">
						<i class="fa fa-bars"></i>
					</button>

					<div class="container">

						<!--Collapse content-->
						<div class="collapse navbar-toggleable-xs" id="collapseEx2">
							<!--Navbar Brand-->
							<a class="navbar-brand" href="index.php">NTG Pastas</a>
							<!--Links-->
							<ul class="nav navbar-nav">
								<li class="nav-item <?php if ($activo == 'empresa.php'){echo 'active';}?>">
									<a class="nav-link" href="empresa.php">La empresa<span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item <?php if ($activo == 'novedades.php'){echo 'active';} ?>">
									<a class="nav-link" href="novedades.php">Novedades</a>
								</li>
								<li class="nav-item <?php if ($activo == 'productos.php'){echo 'active';} ?> dropdown">
									<a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
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

									if($_SESSION['tipous']>0){

									?>
								<li class="nav-item <?php if ($activo == 'listaprecios.php'){echo 'active';} ?>">
									<a class="nav-link" href="listaprecios.php">Lista de Precios</a>
								</li>


										<?php

									}}

								if(isset($_SESSION['tipous'])){

									if($_SESSION['tipous']==1){

									?>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administracion</a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenu1">
										<a class="dropdown-item" href="listar-productos.php">Productos</a>
										<a class="dropdown-item" href="listar-categorias.php">Categorias</a>
										<a class="dropdown-item" href="listar-usuarios.php">Usuarios</a>
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
								<form class="form-inline">
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hola, <?php echo $_SESSION['nombre'];?> </a>
										<div class="dropdown-menu" aria-labelledby="dropdownMenu1">
											<a class="dropdown-item" href="cerrar-sesion.php">Cerrar Sesion</a>

										</div>
									</li>
								</form>
							</ul>
									<?php
									}}
									else {
									?>
							<form class="form-inline">
								<button type="button" class="btn btn-success" id="botonlogin" data-toggle="modal" data-target="#modal-login">Acceder</button>
							</form>
							<?php
									}

									?>
						</div>
						<!--/.Collapse content-->

					</div>

				</nav>

		</div>
		<div style="clear:both;"></div>
	</div>
