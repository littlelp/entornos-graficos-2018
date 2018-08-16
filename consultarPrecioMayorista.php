<?php session_start();
header ("Location: consulta_enviada.php");  
include("includes/conexion.php");
ini_set("display_errors", TRUE);
?>
<!DOCTYPE html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/icono.ico">

    <title>Contactar</title>

    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
  </head>

<body>

    <?php 

    $sql = "INSERT INTO consulta_mayorista (consulta, idUsuario)
      VALUES ('". $_POST["Consulta"]. "','". $_SESSION['idUsuario']. "')";

    mysqli_query($db, $sql);  

    $consultaId = mysqli_insert_id($db);

    foreach ($_POST['productos'] as $i => $producto) {
      $sql = "INSERT INTO producto_consulta_mayorista (cantidad, idProducto, idConsultaMayorista)
      VALUES ('". $_POST['cantidadProducto'][$i]. "','". $producto. "','". $consultaId . "')";

      mysqli_query($db, $sql); 
    }  

    $fecha=date("d-m-Y");
    $hora= date("H:i:s");

		if($_SESSION["tipous"] > 1){
			$destino= "lachocolateria00@gmail.com";
			$asunto="Nueva consulta mayorista de un cliente - La Chocolateria.";
			$desde=$_SESSION['mail'];
			$apellido=$_SESSION['apellido'];
			$nombre =$_SESSION['nombre'];
			$mail=$_SESSION['mail'];
			$productos = "";
			foreach ($_POST['productos'] as $i => $producto) {
        $sql1 = "select *
				from producto p
				where p.idProducto=" . $producto;
        $rsp1 = mysqli_query($db, $sql1);
        $p = mysqli_fetch_array($rsp1);        

        $productos .= "Producto: " . $p['nombre']; 
        $productos .= "		Cantidad:" . $_POST['cantidadProducto'][$i] . "\n";
			}

			$comentario= "
			\n
			$asunto:\n\n
			Apellido: $apellido\n
			Nombre: $nombre\n
			Email: $mail\n
			Mensaje: $_POST[Consulta]\n
			$productos\n
			Enviado el $fecha a las $hora\n";

			mail($destino,$asunto,$comentario,$desde);			
		}

    $destinoRespuestaAutomatica= $desde;
    $asuntoRespuestaAutomatica="Recibimos su consulta por mayorista";
    $desdeRespuestaAutomatica="lachocolateria00@gmail.com";

    $comentarioRespuestaAutomatica= "
        Muchas gracias por su consulta\n
        Le responderemos a la brevedad\n\n
        La Chocolatería";
    
    mail(
        $destinoRespuestaAutomatica,
        $asuntoRespuestaAutomatica,
        $comentarioRespuestaAutomatica,
        $desdeRespuestaAutomatica
    );
    ?> 
</body>
</html>