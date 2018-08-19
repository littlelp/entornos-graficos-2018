<?php

include_once ("includes/cabecera.php");


if(isset($_SESSION['tipous'])){

if($_SESSION['tipous']==1){	
?>

	<div class= "container-fluid" id="contenidoeditcat">

		<div class="row">



					<div class="col-xs-8 col-sm-8 col-md-8 col-md-offset-1">
						<h1>Agregar Categoria</h1>
						<br>
						
</div>	
			
						<br /><br />
				
					<div class="col-xs-10 col-sm-10 col-md-10 col-md-offset-1">

						<form id="formNuevaCat" action="nuevo-categoria.php" method="post">
							
							<div class="md-form">
								<i class="fa  fa-male  prefix"></i>
								<input type="text" name="Nombre" class="form-control validate" maxlength="30" required>
								<label for="Nombre">Nombre:</label>
							</div>
		
		
							<div class="md-form">
								<i class="fa  fa-male  prefix"></i>
								<input type="text" name="Descripcion" class="form-control validate" maxlength="50" required>
								<label for="Descripcion">Descripcion:</label>
							</div>
					
							<button id="btnFormNuevaCat" type="submit" class="btn btn-default">Agregar</button>																		
                                   
					</div>
				
		</div>

	</div>

<?php 
}}
else {echo'<script>window.location="index.php"</script>;';}
include_once ("includes/pie.php");
?>