<?php 

include("includes/conexion.php");


		
if ($_FILES) {
	$carpeta = "img/";
	$destino = $carpeta . $_FILES['imagen']['name'];	
 move_uploaded_file($_FILES['imagen']['tmp_name'], $destino);}
		
		
if($_FILES['imagen']['name']!=''){
		
$sql = "UPDATE web set imagencabecera = '".$destino."'";
}

		
$rs = mysqli_query($db, $sql);




else {echo'<script>window.location="index.php"</script>;';}


header('Location:index.php');


?>
