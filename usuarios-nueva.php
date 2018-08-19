<?php

include_once ("includes/cabecera.php");
if(isset($_SESSION['tipous'])){

if($_SESSION['tipous']==1){

?>

	<div class= "container-fluid" id="contenidoeditcat">

		<div class="row">



					<div class="col-xs-8 col-sm-8 col-md-8 col-md-offset-1">
						<h1>Nuevo Usuario</h1>
						<br>
						
					</div>	
			
					
				<br /><br />
				
					<div class="col-xs-10 col-sm-10 col-md-10 col-md-offset-1">

						<form id="formNuevoUsu" action="nuevo-user.php" method="post">
							
							<div class="md-form">
								<i class="fa  fa-male  prefix"></i>
								<input  type="text" id="Nombre" name="Nombre" class="form-control validate" maxlength="30" required>
								<label for="Nombre">Nombre:</label>
							</div>
		
		
							<div class="md-form">
								<i class="fa  fa-male  prefix"></i>
								<input type="text" id="Apellido" name="Apellido" class="form-control validate" maxlength="30" required>
								<label for="Apellido">Apellido:</label>
							</div>
		
						
						<label>Tipo de Usuario</label>
						<select id= "selTipoUsu" name="tipouser" class="mdb-select" required >
						"						<option value="" disabled selected required >Seleccione:</option>	
							
									<?php	
										
										$sql3= "select * from tipousuario ";

										$rs3= mysqli_query($db, $sql3);
										
										while ($t = mysqli_fetch_array($rs3))
										{?>
								
											
											<option value="<?php echo $t["idTipoUsuario"];?>"><?php echo $t['descripcion']; ?></option>
												
																						<?php	}?>
									
							
								
						</select>
							
						
								<div class="md-form">
								<i class="fa fa-envelope prefix"></i>
								<input type="email" id= "Email" name="Email" class="form-control validate" maxlength="40" required>
								<label for="Email">E-Mail:</label>
							</div>


							<div class="md-form">
								<i class="fa fa-user prefix"></i>
								<input type="text" id="Usuario" name="usuario" class="form-control validate" maxlength="15" required>
								<label for="Usuario">Usuario:</label>
							</div>		
		
							<div class="md-form">
								<i class="fa fa-key prefix"></i>
								<input type="password" name="contrasena" id="Contrasena" class="form-control validate" maxlength="20" required>
								<label for="contrasena">Contraseña:</label>
							</div>                                 
		
																								
				
							<button id= "btnFormNuevoUsu" type="submit" class="btn btn-default">Agregar</button>																		
                                   
					</div>
				
		</div>

	</div>
<script>
	
	$(document).ready(function() {
			$('.mdb-select').material_select();
			// $('#btnFormNuevoUsu').prop("disabled",true);
		});

</script>
<?php 
}}
else {echo'<script>window.location="index.php"</script>;';}
include_once ("includes/pie.php");
?>