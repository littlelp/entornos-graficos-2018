<?php 

include("includes/conexion.php");
header('Location:listar-novedades.php');

if ($_FILES) {
	$carpeta = "img/productos/";
	$destino = $carpeta . $_FILES['Imagen']['name'];	
 move_uploaded_file($_FILES['Imagen']['tmp_name'], $destino);}
		


settype($_GET["id"], "integer");


	if($_FILES['Imagen']['name']!=''){	
		$sql = "UPDATE novedades set titulo = '". $_POST["Titulo"]."', parrafo1 = '". $_POST["Parrafo1"]. "', parrafo2 = '". $_POST["Parrafo2"]. "', parrafo3 = '". $_POST["Parrafo3"]. "',imagen = '".$destino."', fechaAlta = now() 
		WHERE idNovedades = " . $_GET["id"];	}
	else {
		$sql = "UPDATE novedades set titulo = '". $_POST["Titulo"]."', parrafo1 = '". $_POST["Parrafo1"]. "', parrafo2 = '". $_POST["Parrafo2"]. "', parrafo3 = '". $_POST["Parrafo3"]. "', fechaAlta = now()
		WHERE idNovedades = " . $_GET["id"];	}


$rs = mysqli_query($db, $sql);

?>
