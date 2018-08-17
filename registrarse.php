<?php 

include("includes/conexion.php");
$pass=md5($_POST["contrasena"]);		
		
$sql = "INSERT INTO usuario (usuario, contrasena, nombre, apellido, email, tipous, fechaAlta)
		VALUES ('". $_POST["usuario"]. "','". $pass. "','". $_POST["Nombre"]. "','". $_POST["Apellido"]. "','". $_POST["Email"]. "', 2 , now())";
 
		
$rs = mysqli_query($db, $sql);

header('Location:registro-exitoso.php');

?>