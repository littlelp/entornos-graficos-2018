<?php

include_once ("includes/cabecera.php");

if(isset($_SESSION['tipous'])){

if($_SESSION['tipous']==1){
	
	$r=$_GET["id"];
?>

	<div class= "container-fluid" id="contenidoeditcat">

		<div class="row">



					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1 style="text-align:center" >Restablecer Contraseña</h1>
						<br>
						
	
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3" style="float:center">

						<form action="contra.php?id=<?php  echo $r; ?>" method="post">
							
							
							
		
							<div class="md-form">
								<i class="fa fa-key prefix"></i>
								<input type="password" name="pass" class="form-control validate" maxlength="20" required>
								<label for="pass">Nueva Contraseña:</label>
							</div>                                 

				
							<p style="text-align:center" ><a href="listar-usuarios.php" class="btn btn-success btn-rounded">Volver</a></p>	
							<p style="text-align:center" ><button type="submit" class="btn btn-default btn-rounded">Modificar</button></p>																	
                       </form>            
					</div>
				
		</div>

	</div>
	
	
<script>
	
	$(document).ready(function() {
		$('.mdb-select').material_select();
		});

</script>
<?php 
}}
else {echo'<script>window.location="index.php"</script>;';}
include_once ("includes/pie.php");
?>