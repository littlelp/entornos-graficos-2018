<?php

include_once ("includes/cabecera.php");
if(isset($_SESSION['tipous'])){

if($_SESSION['tipous']==1){

?>

	<div class= "container-fluid" id="contenidoeditcat">

		<div class="row">



					<div class="col-xs-8 col-sm-8 col-md-8 col-md-offset-1">
						<h1>Nuevo Producto</h1>
						<br>
						
					</div>	
			
					
				<br /><br />
				
					<div class="col-xs-10 col-sm-10 col-md-10 col-md-offset-1">

						<form id="formNuevoProd" name = "formNuevoProd" action="nuevo-producto.php" method="post" enctype="multipart/form-data">
							
							<div class="md-form">
								<i class="fa  fa-male  prefix"></i>
								<input  type="text" id = "txtProducto" name="Nombre" class="form-control validate" maxlength="25" required>
								<label for="Nombre">Nombre:</label>
							</div>
		
		
						<label>Categoria</label>
						<select name="selCat" id="selCat" class="mdb-select" required>
						<option value="" disabled selected>Seleccione:</option>	
							
									<?php	
										
										$sql3= "select * from categoria ";

										$rs3= mysqli_query($db, $sql3);
										
										while ($t = mysqli_fetch_array($rs3))
										{?>
								
											
											<option value="<?php echo $t["idCategoria"];?>"><?php echo $t['nombre']; ?></option>
												
																						<?php	}?>
									
							
								
						</select>
						
						<div class="md-form">
							<i class="fa fa-pencil prefix"></i>
							<textarea  id="descripcion" name="Descripcion" class="md-textarea" length="160" maxlength="160" requiered></textarea>
							<label for="Descripcion">Descripcion</label>
						</div>					
						
						<div class="md-form">
								<i class="fa  fa-money  prefix"></i>
								<input  type="number" id = "Precio1" name="Precio1" class="form-control validate" maxlength="10">
								<label for="Precio1">Precio Mano de Obra:</label>
						</div>
						
							<div class="md-form">
								<i class="fa  fa-money  prefix"></i>
								<input type="number" id = "PrecioLista" name="PrecioLista" class="form-control validate" maxlength="10">
								<label for="Precio4">Precio Lista:</label>
						</div>
					
							<div class="file-field">
								<div class="btn btn-primary">
									<span>Seleccione Imagen</span>
									<input name="Imagen" type="file" required>
								</div>
								<div class="file-path-wrapper">
								   <input class="file-path validate" type="text" id="txtImagen" placeholder="Subir Imagen" required>
								</div>
							</div>
						
						<div style="clear:both;"></div>
											
							<fieldset class="form-group">
								<input type="checkbox" id="Destacado" name="Destacado">
								<label for="Destacado">Producto Destacado</label>
							</fieldset>																	
				
							<button id = "btnFormNuevoProd" type="submit" class="btn btn-default">Agregar</button>																		
                                   
					</div>
				
						</form>
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