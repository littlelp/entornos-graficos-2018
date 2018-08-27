<?php 

include("includes/conexion.php");
//if(isset($_SESSION['tipous'])){

//if($_SESSION['tipous']==1){
$pass=md5($_POST["contrasena"]);	
$email = $_POST["Email"];
$usuario = $_POST["usuario"];

//--------------------------------------------------------------------------------

$sqlEmail = "SELECT email FROM usuario WHERE email = '$email' LIMIT 1";
$sqlUser = "SELECT usuario FROM usuario WHERE usuario = '$usuario' LIMIT 1";

$res = mysqli_query($db, $sqlEmail) or die(mysql_error());
$res2 = mysqli_query($db, $sqlUser) or die(mysql_error());
$registros= mysqli_num_rows($res);
$registros2= mysqli_num_rows($res2);

if ($registros > 0 && $registros2 > 0) {
	echo '
	  <script type="text/javascript" language="javascript">
	      window.alert("El nombre de usuario y el email ingresados ya se encuentran registrados.");
	      window.location.replace("index.php");
	  </script> ';
	  //header('Location:usuarios-nueva.php');
}
else {
	if ($registros > 0) {
		echo '
		<script type="text/javascript" language="javascript">
	      window.alert("Ya existe un usuario registrado con ese email.");
	      window.location.replace("index.php");
	  </script> ';
	} 
	else {
		if ($registros2 > 0) {
			echo '
			<script type="text/javascript" language="javascript">
		      window.alert("Ya existe un usuario registrado con ese nombre de usuario.");
		      window.location.replace("index.php");
		  	</script> ';
		} else {
			$sql = "INSERT INTO usuario (usuario, contrasena, nombre, apellido, email, tipous, fechaAlta)
					VALUES ('". $_POST["usuario"]. "','". $pass. "','". $_POST["Nombre"]. "','". $_POST["Apellido"]. "','". $_POST["Email"]. "','". $_POST["tipouser"]. "', now())";
			 
					
			$rs = mysqli_query($db, $sql);

			//}}
			//else {echo'<script>window.location="index.php"</script>;';}
			header('Location:listar-usuarios.php');
		}
	}	
}
?>
