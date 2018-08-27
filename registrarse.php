<?php 

include("includes/conexion.php");
$pass=md5($_POST["contrasena"]);		
$email = $_POST["Email"];

//--------------------------------------------------------------------------------

$sqll = "SELECT email FROM usuario WHERE email = '$email' LIMIT 1";

$res = mysqli_query($db, $sqll) or die(mysql_error());

if (mysqli_num_rows($res) > 0) {
	echo '
	  <script type="text/javascript" language="javascript">
	      window.alert("Ya existe un usuario registrado con ese email.");
	      window.location.replace("index.php");
	  </script> ';
	  //header('Location:usuarios-nueva.php');
}
else {
		
	$sql = "INSERT INTO usuario (usuario, contrasena, nombre, apellido, email, tipous, fechaAlta)
			VALUES ('". $_POST["usuario"]. "','". $pass. "','". $_POST["Nombre"]. "','". $_POST["Apellido"]. "','". $_POST["Email"]. "', 2 , now())";
	 
			
	$rs = mysqli_query($db, $sql);

	header('Location:registro-exitoso.php');
}
?>