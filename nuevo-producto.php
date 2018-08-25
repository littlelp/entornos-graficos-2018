<?php 

include("includes/conexion.php");

//(isset($_SESSION['tipous'])){
									
								//	if($_SESSION['tipous']==1){
									

if ($_FILES) {
	$carpeta = "img/productos/";
	$destino = $carpeta . $_FILES['Imagen']['name'];	
	move_uploaded_file($_FILES['Imagen']['tmp_name'], $destino) ;}
	
if(isset($_POST["Destacado"])){		
$sql = "INSERT INTO producto (destacado, nombre, descripcion, idCategoria, precioLista, precio1, imagen, stock)
		VALUES ('". $_POST["Destacado"]. "','". $_POST["Nombre"]. "','". $_POST["Descripcion"]. "','". $_POST["selCat"]. "','". $_POST["PrecioLista"]. "','". $_POST["Precio1"]. "',
		'".$destino."','". $_POST["Stock"]. "')";
}
else{
	$sql = "INSERT INTO producto (nombre, descripcion, idCategoria, precioLista, precio1, imagen, stock)
		VALUES ('". $_POST["Nombre"]. "','". $_POST["Descripcion"]. "','". $_POST["selCat"]. "','". $_POST["PrecioLista"]. "','". $_POST["Precio1"]. "',
		'".$destino."','". $_POST["Stock"]. "')";
}
$rs = mysqli_query($db, $sql);

header('Location:listar-productos.php');



//}}
//else {echo'<script>window.location="index.php"</script>;';}
?>


