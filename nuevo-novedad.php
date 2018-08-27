<?php 


include("includes/conexion.php");
//(isset($_SESSION['tipous'])){
									
								//	if($_SESSION['tipous']==1){
									
//echo "1." . $_POST["titulo"];									

if ($_FILES) {
	$carpeta = "img/novedades/";
	$destino = $carpeta . $_FILES['imagen']['name'];	
	move_uploaded_file($_FILES['imagen']['tmp_name'], $destino) ;
}
	

$sql = "INSERT INTO novedades (titulo, parrafo1, parrafo2, imagen, fechaAlta)
		VALUES ('". $_POST["titulo"]. "','". $_POST["parrafo1"]. "','". $_POST["parrafo2"]. "','".$destino."' , now())";

		
$rs = mysqli_query($db, $sql);
//echo "2." . $_POST["titulo"];
//echo $sql;
header('Location:listar-novedades.php');
//}}
//else {echo'<script>window.location="index.php"</script>;';}
?>


