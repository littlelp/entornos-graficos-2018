<?php 
														
include("includes/conexion.php");
session_start();

$id = $_GET['id'];
foreach ($_SESSION['carrito'] as $i => $producto) {
	if($producto['idProducto'] == $id){
		unset($_SESSION['carrito'][$i]);
	}
}
header('Location: listar-carrito.php');

?>