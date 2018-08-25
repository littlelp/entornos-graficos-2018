<?php 
session_start();

include("includes/conexion.php");

$id = $_GET["prod"];

$x = false;

foreach ($_SESSION['carrito'] as $i => $producto) {
	if($producto['idProducto'] == $id){
		$_SESSION['carrito'][$i]['cantidad'] = $producto['cantidad'] + 1;	
		$x = true;
	}
}

if(!$x){
	$sql='select * from producto where idProducto ="'. $id .'"';
	$rs = mysqli_query($db,$sql);	
	$r=mysqli_fetch_array($rs);
	$r['cantidad'] = 1;
	$_SESSION['carrito'][]=$r;
}

header('Location:listar-carrito.php');

?>
