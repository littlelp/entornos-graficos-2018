<?php 
// *****************************************************************************
// Nombre: personas-nueva.php
// Descripción: Agrega Personas
// Autor: Damian Moreiro
// Fecha de creación: 27/06/16
// Fecha de modificacion:
//******************************************************************************

include("includes/conexion.php");

header('Location:listar-productos.php');
//(isset($_SESSION['tipous'])){
									
								//	if($_SESSION['tipous']==1){
									
									

if ($_FILES) {
	$carpeta = "img/productos/";
	$destino = $carpeta . $_FILES['Imagen']['name'];	
	move_uploaded_file($_FILES['Imagen']['tmp_name'], $destino) ;}
	
if(isset($_POST["Destacado"])){		
$sql = "INSERT INTO producto (destacado, nombre, descripcion, idCategoria, precioLista, precio1, imagen)
		VALUES ('". $_POST["Destacado"]. "','". $_POST["Nombre"]. "','". $_POST["Descripcion"]. "','". $_POST["cat"]. "','". $_POST["Caracteristicas"]. "','". $_POST["PrecioLista"]. "','". $_POST["Precio1"]. "',
		'".$destino."')";
}
else{
	$sql = "INSERT INTO producto (nombre, descripcion, idCategoria, precioLista, precio1, imagen)
		VALUES ('". $_POST["Nombre"]. "','". $_POST["Descripcion"]. "','". $_POST["cat"]. "','". $_POST["Caracteristicas"]. "','". $_POST["PrecioLista"]. "','". $_POST["Precio1"]. "',
		'".$destino."')";
}
		
$rs = mysqli_query($db, $sql);


//}}
//else {echo'<script language="javascript">window.location="index.php"</script>;';}
?>


