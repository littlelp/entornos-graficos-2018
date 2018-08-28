<?php 
session_start();
include("includes/conexion.php");

$pass=md5($_POST["contrasena"]);		
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


if ($registros > 0 && $registros2 > 0 && $r['email'] !== $_SESSION['mail'] && $r2['usuario'] !== $_SESSION['user']) {
	echo '
    <script type="text/javascript" language="javascript">
    window.alert("El nombre de usuario y el email ingresados ya se encuentran registrados.");
    window.location.replace("mi-perfil.php");
    </script> ';
    //header('Location:usuarios-nueva.php');
}
else {
	if ($registros > 0 && $r['email'] !== $_SESSION['mail']) {
		echo '
		<script type="text/javascript" language="javascript">
        window.alert("Ya existe un usuario registrado con ese email.");
        window.location.replace("mi-perfil.php");
        </script> ';
	} 
	else {
		if ($registros2 > 0 && $r2['usuario'] !== $_SESSION['user']) {
			echo '
			<script type="text/javascript" language="javascript">
            window.alert("Ya existe un usuario registrado con ese nombre de usuario.");
            window.location.replace("mi-perfil.php");
            </script> ';
		} else {
            
            $sql = "UPDATE usuario set nombre = '". $_POST["Nombre"]. "', apellido = '". $_POST["Apellido"]. "', usuario = '". $_POST["usuario"]. "',
            email = '". $_POST["Email"]. "', contrasena = '". $pass. "'
            WHERE idUsuario = " . $_SESSION['idUsuario'];
            
            $rs = mysqli_query($db, $sql);
            
            if ($rs) {
                $_SESSION['nombre'] = $_POST['Nombre'];
                $_SESSION['apellido'] = $_POST['Apellido'];
                $_SESSION['mail'] = $_POST['Email'];
            }
            
            header('Location:mi-perfil.php');
        }
    }	
}
?>