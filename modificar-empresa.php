<?php 

include("includes/conexion.php");

//if(isset($_SESSION['tipous'])){

//if($_SESSION['tipous']==1){	
		
if ($_FILES) {
	$carpeta = "img/";
	$destino = $carpeta . $_FILES['imagen']['name'];	
 move_uploaded_file($_FILES['imagen']['tmp_name'], $destino);}
		
		
if($_FILES['imagen']['name']!=''){
		
$sql = "UPDATE web set contenidoempresa = '". $_POST["contenido"]. "', imagenempresa = '".$destino."'";
}

else{
	$sql = "UPDATE web set contenidoempresa = '". $_POST["contenido"]. "'";
}
		
$rs = mysqli_query($db, $sql);



//}}
//else {echo'<script language="javascript">window.location="index.php"</script>;';}


header('Location:empresa.php');


?>
