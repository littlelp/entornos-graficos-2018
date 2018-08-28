<?php 

include("includes/conexion.php");
session_start();
$email = $_POST["Email"];
$usuario = $_POST["usuario"];

$sqlEmail = "SELECT email FROM usuario WHERE email = '$email' LIMIT 1";
$sqlUser = "SELECT usuario FROM usuario WHERE usuario = '$usuario' LIMIT 1";


$res = mysqli_query($db, $sqlEmail) or die(mysql_error());
$res2 = mysqli_query($db, $sqlUser) or die(mysql_error());
$r = mysqli_fetch_array($res);
$r2 = mysqli_fetch_array($res2);
$registros= mysqli_num_rows($res);
$registros2= mysqli_num_rows($res2);
$redirect = 'usuarios-editar.php?id=' . $_GET['id'];
if ($registros > 0 && $registros2 > 0 && $r['email'] !== $_SESSION['mail_editado'] && $r2['usuario'] !== $_SESSION['usuario_editado']) {
	echo '
	<script type="text/javascript" language="javascript">
	window.alert("El nombre de usuario y el email ingresados ya se encuentran registrados.");
	window.location.replace("'. $redirect .'");
	</script> ';
	//header('Location:usuarios-nueva.php');
}
else {
	if ($registros > 0 && $r['email'] !== $_SESSION['mail_editado']) {
		echo '
		<script type="text/javascript" language="javascript">
		window.alert("Ya existe un usuario registrado con ese email.");
		window.location.replace("'. $redirect .'");
		</script> ';
	} 
	else {
		if ($registros2 > 0 && $r2['usuario'] !== $_SESSION['usuario_editado']) {
			echo '
			<script type="text/javascript" language="javascript">
			window.alert("Ya existe un usuario registrado con ese nombre de usuario.");
			window.location.replace("'. $redirect .'");
			</script> ';
		} else {
			
			settype($_GET["id"], "integer");	
			$sql = "UPDATE usuario set nombre = '". $_POST["Nombre"]. "', apellido = '". $_POST["Apellido"]. "', usuario = '". $_POST["usuario"]. "', email = '". $_POST["Email"]. "',tipous = '". $_POST["tipouser"]. "', fechaAlta = now()
			WHERE idUsuario = " . $_GET["id"];
			
			$rs = mysqli_query($db, $sql);
			
			
			header('Location:listar-usuarios.php');
		}
	}	
}
?>
