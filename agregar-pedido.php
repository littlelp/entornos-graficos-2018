<?php 
														
include("includes/conexion.php");
session_start();
$total = 0;
foreach ($_SESSION['carrito'] as $i => $producto) {	
    $total = $total + ($producto["precioLista"] * $producto["cantidad"]);
}
$sql = "INSERT INTO pedidos (fechaPedido, idUsuario, direccionEnvio, estado, total)
      VALUES ('".  date("Y-m-d H:i:s") . "','". $_SESSION['idUsuario']. "','". $_POST['direccion']. "', 'pendiente', '". $total . "')";
    mysqli_query($db, $sql);  
    $consultaId = mysqli_insert_id($db);

    foreach ($_SESSION['carrito'] as $i => $producto) {
      $sql = "INSERT INTO productos_pedidos (cantidad, idProducto, idPedido)
      VALUES ('". $producto['cantidad']. "','". $producto['idProducto']. "','". $consultaId . "')";
      mysqli_query($db, $sql); 
    }
$_SESSION['carrito'] = [];
header('Location: listar-carrito.php');

?>
