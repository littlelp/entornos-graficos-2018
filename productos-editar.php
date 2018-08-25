<?php

include_once ("includes/cabecera.php");

if(isset($_SESSION['tipous'])){
									
									if($_SESSION['tipous']==1){
									
									
?>

	<div class= "container-fluid" id="contenidoeditcat">

		<div class="row">



					<div class="col-xs-8 col-sm-8 col-md-8 col-md-offset-1">
						<h1>Editar Producto</h1>
						<br>
						
					</div>	
			
					
				<br /><br />
				
					<div class="col-xs-10 col-sm-10 col-md-10 col-md-offset-1">
									<?php
									settype($_GET["id"], "integer");
									$sql1 = "select *
											from producto p
											where p.idProducto=" . $_GET["id"];
									$rsp1 = mysqli_query($db, $sql1);
				
					while ($rp = mysqli_fetch_array($rsp1) ) {
				
									?>
						<form id="formModificarProd" action="modificar-producto.php?id=<?php  echo $rp["idProducto"]; ?>" method="post" enctype="multipart/form-data">
							
							<div class="md-form">
								<i class="fa  fa-male"></i>
								<input value="<?php  echo $rp["nombre"]; ?>"  type="text" id = "txtProducto" name="Nombre" class="form-control validate" maxlength="30" required>
								<label for="Nombre">Nombre:</label>
							</div>
		
		
						<label>Categoria</label>
						<select name="cat" id="Cat" class="mdb-select" required>
						<option value="" disabled selected>Seleccione:</option>	
							
									<?php	
										
										$sql3= "select * from categoria ";

										$rs3= mysqli_query($db, $sql3);
										
										while ($t = mysqli_fetch_array($rs3))
										{  if($rp['idCategoria']==$t['idCategoria']){$sel=' "selected> ';}
											
											else {$sel='"> ';}?>
											?>
								
											
											<option value="<?php  echo $t["idCategoria"].$sel.$t['nombre'];?></option>;
												
																						<?php	}?>
									
							
								
						</select>
						
						<div class="md-form">
							<i class="fa fa-pencil prefix"></i>
							<textarea  id = "descripcion" name="Descripcion" class="md-textarea" length="160" maxlength="160" required><?php  echo $rp["descripcion"]; ?></textarea>
							<label for="Descripcion">Descripcion</label>
						</div>						
						
						<div class="md-form">
								<i class="fa  fa-money  prefix"></i>
								<input value="<?php  echo $rp["precio1"]; ?>" type="number" id="Precio1" name="Precio1" class="form-control validate" maxlength="10">
								<label for="Precio1">Precio Mano de Obra:</label>
						</div>					
						
						<div class="md-form">
								<i class="fa  fa-money  prefix"></i>
								<input value="<?php  echo $rp["precioLista"]; ?>" type="number" id="PrecioLista" name="PrecioLista" class="form-control validate" maxlength="10">
								<label for="Precio4">Precio Lista:</label>
						</div>

						<div class="md-form">
								<i class="fa  fa-stop  prefix"></i>
								<input value="<?php  echo $rp["stock"]; ?>" type="number" id="Stock" name="Stock" class="form-control validate" maxlength="10">
								<label for="Stock">Stock:</label>
						</div>
					
							<div class="file-field">
								<div class="btn btn-primary">
									<span>Seleccione Imagen</span>
									<input name="Imagen" type="file">
								</div>
								<div class="file-path-wrapper">
								   <input class="file-path validate" type="text" id="txtImagen" placeholder="Subir Imagen">
								</div>
							</div>
						
							<fieldset class="form-group">
								<input type="checkbox" id="Destacado" name="Destacado" <?php if($rp["destacado"]=='on'){echo'checked="checked"';}?>>
								<label for="Destacado">Producto Destacado</label>
							</fieldset>
							
							
							<?php }?>						
				
							<button id="btnFormModificarProd" type="submit" class="btn btn-default">Modificar</button>																		
                                   
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