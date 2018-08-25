<?php

include_once ("includes/cabecera.php");
if(isset($_SESSION['tipous'])){

if($_SESSION['tipous']==1){

?>

	<div class= "container-fluid" id="contenidoeditcat">

		<div class="row">



					<div class="col-xs-8 col-sm-8 col-md-8 col-md-offset-1">
						<h1>Nueva Imagen en Carousel</h1>
						<br>
						
					</div>	
			
					
				<br /><br />
				
					<div class="col-xs-10 col-sm-10 col-md-10 col-md-offset-1">

						<form id="formNuevoCarousel" action="nuevo-carousel.php" method="post" enctype="multipart/form-data">
							
							<div class="md-form">
								<i class="fa  fa-male  prefix"></i>
								<input  type="text" id="Nombre" name="Nombre" class="form-control validate" maxlength="25" required>
								<label for="Nombre">Nombre:</label>
							</div>
		
		
						
					
							<div class="file-field">
								<div class="btn btn-primary">
									<span>Seleccione Imagen</span>
									<input name="Imagen" type="file">
								</div>
								<div class="file-path-wrapper">
								   <input class="file-path validate" type="text" placeholder="Subir Imagen" required>
								</div>
								<p> Tamaño recomendado: 1170px horizontales. 360px verticales </p>
							</div>
							<div style="clear:both;"></div>														
				
							<button id="btnFormNuevoCarousel" type="submit" class="btn btn-default">Agregar</button>																		
                                   
					</div>
				
						</form>
		</div>

	</div>

<?php 
}}
else {echo'<script>window.location="index.php"</script>;';}
include_once ("includes/pie.php");
?>