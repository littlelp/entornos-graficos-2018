<?php 
// *****************************************************************************
// Nombre: personas-nueva.php
// Descripción: Agrega Personas
// Autor: Damian Moreiro
// Fecha de creación: 27/06/16
// Fecha de modificacion:
//******************************************************************************

include("includes/conexion.php");

//if(isset($_SESSION['tipous'])){

//if($_SESSION['tipous']==1){	
		
settype($_GET["id"], "integer");
		
$sql = "UPDATE categoria set nombre = '". $_POST["Nombre"]. "', descripcion = '". $_POST["Descripcion"]. "'	WHERE idCategoria = " . $_GET["id"];
		
$rs = mysqli_query($db, $sql);


<?php 
//}}
//else {echo'<script language="javascript">window.location="index.php"</script>;';}


header('Location:listar-categorias.php');


?>
