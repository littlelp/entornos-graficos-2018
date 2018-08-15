<?php 

include("includes/conexion.php");
//(isset($_SESSION['tipous'])){
									
								//	if($_SESSION['tipous']==1){
									
									

if ($_FILES) {
	$carpeta = "img/carousel/";
	$destino = $carpeta . $_FILES['Imagen']['name'];	
	move_uploaded_file($_FILES['Imagen']['tmp_name'], $destino) ;}
	
	$sql = "INSERT INTO carousel (nombre, imagen)
		VALUES ('". $_POST["Nombre"]. "','".$destino."')";

		
$rs = mysqli_query($db, $sql);


header('Location:listar-carousel.php');
//}}
//else {echo'<script>window.location="index.php"</script>;';}
?>


