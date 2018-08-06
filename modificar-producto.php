<?php 
// *****************************************************************************
// Nombre: personas-nueva.php
// Descripción: Agrega Personas
// Autor: Damian Moreiro
// Fecha de creación: 27/06/16
// Fecha de modificacion:
//******************************************************************************
//if(isset($_SESSION['tipous'])){
									
//if($_SESSION['tipous']==1){
									
								
include("includes/conexion.php");

if ($_FILES) {
	$carpeta = "img/productos/";
	$destino = $carpeta . $_FILES['Imagen']['name'];	
 move_uploaded_file($_FILES['Imagen']['tmp_name'], $destino);}
		

settype($_GET["id"], "integer");



	if($_FILES['Imagen']['name']!='' && isset($_POST["Destacado"])){	
		$sql = "UPDATE producto set nombre = '". $_POST["Nombre"]."', idCategoria = '". $_POST["cat"]. "', descripcion = '". $_POST["Descripcion"]. "', imagen = '".$destino."',video = '".$_POST["Video"]. "',precioLista = '". $_POST["PrecioLista"]. "',precio1 = '". $_POST["Precio1"]. "',destacado = '". $_POST["Destacado"]. "'
		WHERE idProducto = " . $_GET["id"];	}
	elseif($_FILES['Imagen']['name']!='' ){	
$sql = "UPDATE producto set nombre = '". $_POST["Nombre"]."', idCategoria = '". $_POST["cat"]. "', descripcion = '". $_POST["Descripcion"]. "', imagen = '".$destino."',video = '".$_POST["Video"]. "',precioLista = '". $_POST["PrecioLista"]. "',precio1 = '". $_POST["Precio1"]. "',destacado = ''
WHERE idProducto = " . $_GET["id"];}
 
 //Hasta aca hace si hay imagen...
	
	elseif(isset($_POST["Destacado"])){
	 
$sql = "UPDATE producto set nombre = '". $_POST["Nombre"]."', idCategoria = '". $_POST["cat"]. "', descripcion = '". $_POST["Descripcion"]. "', precioLista = '". $_POST["PrecioLista"]. "',precio1 = '". $_POST["Precio1"]. "',destacado = '". $_POST["Destacado"]. "'
		WHERE idProducto = " . $_GET["id"];}
		
	else{ $sql = "UPDATE producto set nombre = '". $_POST["Nombre"]."', idCategoria = '". $_POST["cat"]. "', descripcion = '". $_POST["Descripcion"]. "', precioLista = '". $_POST["PrecioLista"]. "',precio1 = '". $_POST["Precio1"]. "' ,destacado = ''
 WHERE idProducto = " . $_GET["id"];}

$rs = mysqli_query($db, $sql);

//}}
//else {echo'<script language="javascript">window.location="index.php"</script>;';}
//echo $sql;
header('Location:listar-productos.php');


?>
