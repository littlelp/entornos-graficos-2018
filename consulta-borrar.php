<?php 				
									
include("includes/conexion.php");
settype($_GET["id"], "integer");
$sql = "DELETE FROM consulta_mayorista WHERE idConsulta = " . $_GET["id"];
mysqli_query($db, $sql);

$sql = "DELETE FROM producto_consulta_mayorista WHERE idConsultaMayorista = " . $_GET["id"];
mysqli_query($db, $sql);

header('Location: listar-consultas-mayoristas.php');

?>