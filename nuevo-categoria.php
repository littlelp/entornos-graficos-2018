<?php 

include("includes/conexion.php");
//if(isset($_SESSION['tipous'])){

//if($_SESSION['tipous']==1){
		
		
$sql = "INSERT INTO categoria (nombre, descripcion)
		VALUES ('". $_POST["Nombre"]. "','". $_POST["Descripcion"]. "')";
 
		
$rs = mysqli_query($db, $sql);


 
//}}
//else {echo'<script>window.location="index.php"</script>;';}
header('Location:listar-categorias.php');

?>
