<?php 
// *****************************************************************************
// Nombre: personas-borrar.php
// Descripción: 
// Autor: 
// Fecha de creación: 
// Fecha de modificacion: 99/99/9999 Autor: xxx  Modificación: xxxxxxxx
//******************************************************************************

include("includes/conexion.php");
settype($_GET["id"], "integer");

$sql3 = "DELETE FROM producto WHERE idCategoria = " . $_GET["id"];
$rs = mysqli_query($db, $sql3);
//if($_SESSION['tipous']==1){	
$sql = "DELETE FROM categoria WHERE idCategoria = " . $_GET["id"];
$rs = mysqli_query($db, $sql);

//}}
//else {echo'<script language="javascript">window.location="index.php"</script>;';}
header('Location: listar-categorias.php');



?>