<?php 
// *****************************************************************************
// Nombre: personas-borrar.php
// Descripción: 
// Autor: 
// Fecha de creación: 
// Fecha de modificacion: 99/99/9999 Autor: xxx  Modificación: xxxxxxxx
//******************************************************************************
//if(isset($_SESSION['tipous'])){
									
	//								if($_SESSION['tipous']==1){
									
									
include("includes/conexion.php");
settype($_GET["id"], "integer");
$sql = "DELETE FROM producto WHERE idProducto = " . $_GET["id"];
$rs = mysqli_query($db, $sql);


header('Location: listar-productos.php');
//}}
//else {echo'<script>window.location="index.php"</script>;';}

?>