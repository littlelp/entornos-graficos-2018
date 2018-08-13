<?php 

include("includes/conexion.php");

//if(isset($_SESSION['tipous'])){

//if($_SESSION['tipous']==1){	

$p=md5($_POST["pass"]);
	

	settype($_GET["id"], "integer");	
$sql = "UPDATE usuario set contrasena = '". $p. "' WHERE idUsuario = " . $_GET["id"];
		
$rs = mysqli_query($db, $sql);

 
//}}
//else {echo'<script language="javascript">window.location="index.php"</script>;';}

header('Location:listar-usuarios.php');

?>
