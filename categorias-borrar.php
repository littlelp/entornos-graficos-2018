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

$sql2 = "select * from producto WHERE idCategoria = " . $_GET["id"];

$rs2 = mysqli_query($db, $sql2);
$cant=mysqli_num_rows($rs2);

if($cant==0){


//if($_SESSION['tipous']==1){	
$sql = "DELETE FROM categoria WHERE idCategoria = " . $_GET["id"];
$rs = mysqli_query($db, $sql);

//}}
//else {echo'<script language="javascript">window.location="index.php"</script>;';}
header('Location: listar-categorias.php');}

else{header('Location: seguro-categorias.php?id='. $_GET["id"]);

echo "false";}

?>