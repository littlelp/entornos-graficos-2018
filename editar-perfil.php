<?php 
session_start();
include("includes/conexion.php");

$p=md5($_POST["contrasena"]);

$sql = "UPDATE usuario set nombre = '". $_POST["Nombre"]. "', apellido = '". $_POST["Apellido"]. "', usuario = '". $_POST["usuario"]. "',
 email = '". $_POST["Email"]. "', contrasena = '". $p. "'
    WHERE idUsuario = " . $_SESSION['idUsuario'];

$rs = mysqli_query($db, $sql);

if ($rs) {
    $_SESSION['nombre'] = $_POST['Nombre'];
    $_SESSION['apellido'] = $_POST['Apellido'];
    $_SESSION['mail'] = $_POST['Email'];
}

header('Location:mi-perfil.php');

?>