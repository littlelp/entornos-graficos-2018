<?php 
include_once ("includes/cabecera.php");

if(isset($_SESSION['tipous'])){

if($_SESSION['tipous']==1){	
?>
		
	<div class= "container-fluid" id="contenidoempresa">
	
					<br>
					<br>
					<br>
					<h5 style="text-align:center">Esta categoria contiene productos dentro. Los mismos se borraran</h5>
					
					
					<h5 style="text-align:center" >¿Seguro que desea borrarla?</h5>
					
					<br>
					<br>
					<br>
					<p style="text-align:center" ><a href="listar-categorias.php" class="btn btn-success btn-rounded">Volver</a><a href="borrarcat.php?id=<?php echo $_GET["id"];?>" class="btn btn-warning btn-rounded">Borrar</a></p>
					
					
					
	</div>		
	

	
<?php 
}}
else {echo'<script language="javascript">window.location="index.php"</script>;';}
include_once ("includes/pie.php");
?>