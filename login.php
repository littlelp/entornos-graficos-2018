<?php
include("includes/conexion.php");

$u=$_POST['user'];
$c=md5($_POST['pass']);

$sql='select * from usuario
		where usuario ="'.$u.'" and contrasena="'.$c.'"';

$rs = mysqli_query($db,$sql);

$cant=mysqli_num_rows($rs);

if($cant==1){
	$r=mysqli_fetch_array($rs);
	session_start();
	$_SESSION['nombre']=$r['nombre'];
	$_SESSION['tipous']=$r['tipous'];
	$_SESSION['apellido']=$r['apellido'];
	$_SESSION['mail']=$r['email'];
	$_SESSION['idUsuario']=$r['idUsuario'];
	$_SESSION['user']=$r['usuario'];
	
	header('Location:index.php');
}
else{ header('Location:login-error.php');}
?>