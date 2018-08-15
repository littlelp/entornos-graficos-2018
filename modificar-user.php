<?php 

include("includes/conexion.php");

//if(isset($_SESSION['tipous'])){

//if($_SESSION['tipous']==1){		
	settype($_GET["id"], "integer");	
$sql = "UPDATE usuario set nombre = '". $_POST["Nombre"]. "', apellido = '". $_POST["Apellido"]. "', usuario = '". $_POST["usuario"]. "', email = '". $_POST["Email"]. "',tipous = '". $_POST["tipouser"]. "', fechaAlta = now()
		WHERE idUsuario = " . $_GET["id"];
		
$rs = mysqli_query($db, $sql);

 
//}}
//else {echo'<script>window.location="index.php"</script>;';}

header('Location:listar-usuarios.php');

?>
