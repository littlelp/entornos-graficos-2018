<?php 

include("includes/conexion.php");

		
if ($_FILES) {
	$carpeta = "img/";
	$destino = $carpeta . $_FILES['imagen']['name'];	
 move_uploaded_file($_FILES['imagen']['tmp_name'], $destino);}
		
		
if($_FILES['imagen']['name']!=''){
		
$sql = "UPDATE web set contenidoindex = '". $_POST["contenido"]. "', imagenindex = '".$destino."'";
}

else{
	$sql = "UPDATE web set contenidoindex = '". $_POST["contenido"]. "'";
}
		
$rs = mysqli_query($db, $sql);





header('Location:index.php');


?>
