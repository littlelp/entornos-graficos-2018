<?php 
														
include("includes/conexion.php");
session_start();

$total = 0;
$location = 'Location: registro-pedido-exitoso.php';
$error = false;
foreach ($_SESSION['carrito'] as $i => $producto) {	
  $sql = "SELECT * FROM producto WHERE idProducto = '". $producto['idProducto']. "'";
  $rsp1 = mysqli_query($db, $sql); 
  $p = mysqli_fetch_array($rsp1);

  if($producto["cantidad"] > $p['stock']){
    $location = 'Location: error-carrito.php';
    $error = true;
  } else {
    $total = $total + ($producto["precioLista"] * $producto["cantidad"]);
  }
}

if(!$error){
  $sql = "INSERT INTO pedidos (fechaPedido, idUsuario, direccionEnvio, estado, total)
  VALUES ('".  date("Y-m-d H:i:s") . "','". $_SESSION['idUsuario']. "','". $_POST['direccion']. "', 'pendiente', '". $total . "')";
  mysqli_query($db, $sql);  
  $consultaId = mysqli_insert_id($db);

  foreach ($_SESSION['carrito'] as $i => $producto) {
    $sql = "INSERT INTO productos_pedidos (cantidad, idProducto, idPedido)
    VALUES ('". $producto['cantidad']. "','". $producto['idProducto']. "','". $consultaId . "')";
    mysqli_query($db, $sql); 

    $sql = "SELECT * FROM producto WHERE idProducto = '". $producto['idProducto']. "'";
    $rsp1 = mysqli_query($db, $sql); 
    $p = mysqli_fetch_array($rsp1);

    $updateStock = $p['stock'] - $producto["cantidad"];

    $sql = "UPDATE producto set stock = " . $updateStock ." WHERE idProducto = " . $producto['idProducto'];
    mysqli_query($db, $sql); 
  }  

  $_SESSION['carrito'] = [];
}

header($location);

?>
