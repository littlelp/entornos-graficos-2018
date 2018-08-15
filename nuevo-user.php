<?php 

include("includes/conexion.php");
//if(isset($_SESSION['tipous'])){

//if($_SESSION['tipous']==1){
$pass=md5($_POST["contrasena"]);		
		
$sql = "INSERT INTO usuario (usuario, contrasena, nombre, apellido, email, tipous, fechaAlta)
		VALUES ('". $_POST["usuario"]. "','". $pass. "','". $_POST["Nombre"]. "','". $_POST["Apellido"]. "','". $_POST["Email"]. "','". $_POST["tipouser"]. "', now())";
 
		
$rs = mysqli_query($db, $sql);


//}}
//else {echo'<script>window.location="index.php"</script>;';}
header('Location:listar-usuarios.php');

?>
