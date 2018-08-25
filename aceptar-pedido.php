<?php 				
									
include("includes/conexion.php");
settype($_GET["id"], "integer");
$sql = "UPDATE pedidos set estado = 'aceptado' WHERE idPedido = " . $_GET["id"];
mysqli_query($db, $sql);

header('Location: listar-mis-pedidos.php');

?>