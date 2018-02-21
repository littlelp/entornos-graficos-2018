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
//if(isset($_SESSION['tipous'])){

//if($_SESSION['tipous']==1){
$sql = "DELETE FROM carousel WHERE idCarousel = " . $_GET["id"];
$rs = mysqli_query($db, $sql);



//}}
//else {echo'<script language="javascript">window.location="index.php"</script>;';}
header('Location: listar-carousel.php');

?>
