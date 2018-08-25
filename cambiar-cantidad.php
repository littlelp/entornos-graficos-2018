<?php 
session_start();

include("includes/conexion.php");
$id = $_GET['id'];
$operacion = $_GET['operacion'];
foreach ($_SESSION['carrito'] as $i => $producto) {
	if($producto['idProducto'] == $id){

        if ($operacion == 'sumar') {
            $_SESSION['carrito'][$i]['cantidad'] = $producto['cantidad'] + 1;	
        } else if ($operacion == 'restar' && $producto['cantidad'] > 1) {
            $_SESSION['carrito'][$i]['cantidad'] = $producto['cantidad'] - 1;	
        }
	}
}
header('Location:listar-carrito.php');

?> 