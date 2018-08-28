<?php 

include_once ("includes/cabecera.php");
if(isset($_SESSION['tipous'])){

if($_SESSION['tipous']>1){	
?>
	<div class= "container-fluid" id="contenidoprecios">
	
		<div class="row">

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="float:center">
							
						<h4 style="text-align:Center"><strong>Consulta Precio Mayorista</strong></h4>
	
				</div>	

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding: 10%" id="precio-mayorista">
				
				<H4 style="text-align:center">Envianos tu Consulta:</h4>
					<form id="formularioPrecioMayorista" action="consultarPrecioMayorista.php" method="post">
					
						<div class="md-form">						
							<textarea type="text" id="consulta" name="Consulta" maxlength="500" class="md-textarea" required></textarea>
							<label for="Consulta"><i class="fa fa-pencil"></i> Consulta:</label>
						</div>

						<label for="Consulta"><i class="fa fa-birthday-cake"></i> Productos a consultar:</label>
						<div class="md-form" id="productosAConsultar">
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<select class="mdb-select col-xs-12 col-sm-12 col-md-10 col-lg-10" id="productos" name="productos[]" style="display: inline;margin: 5%;" required>
									<option value="" disabled selected>Seleccione:</option>	
										<?php	
													
											$sql3= "select * from producto ";

											$rs3= mysqli_query($db, $sql3);
													
											while ($t = mysqli_fetch_array($rs3))
											{?>
											
											<option value="<?php echo $t["idProducto"];?>"><?php echo $t['nombre']; ?></option>
															
									<?php	}?>
								</select>	
							</div>					
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<input type="number" id="cantidadProducto" name="cantidadProducto[]" placeholder="Cantidad a consultar del producto" class="form-control col-xs-12 col-sm-12 col-md-6 col-lg-6" max="100" min=0>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="padding: 3%;">
								Agregar
								<button id="CantidadProductoConsultar" class="fa fa-plus"></button>
							</div>														
						</div>							
			
						<button type="submit" id="btnEnviarConsulta" class="btn btn-default">Enviar</button>
			</div>				
				
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$('#formularioPrecioMayorista #CantidadProductoConsultar').click(function() {
				$('#productosAConsultar').append('<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> ' +
					'<select class="mdb-select col-xs-12 col-sm-12 col-md-10 col-lg-10" style="display: inline;margin: 5%;" name="productos[]" required> ' +
					'<option value="" disabled selected>Seleccione:</option> '
					<?php 
						$sql3= "select * from producto ";
						$rs3= mysqli_query($db, $sql3);
						while ($t = mysqli_fetch_array($rs3))
					{?> 
					+'<option value="<?php echo $t["idProducto"];?>">"<?php echo $t["nombre"]; ?>"</option>' 
					<?php	}?>	+			
					'</select>' +	
					'</div>'+
					'<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">'+
					'<input type="number" name="cantidadProducto[]" placeholder="Cantidad a consultar del producto" class="form-control col-xs-12 col-sm-12 col-md-6 col-lg-6" max="100" min=0>'+
					'</div>');
			});
		});
	</script>	
	
<?php 
}}
else {echo'<script language="javascript">window.location="index.php"</script>;';}
include_once ("includes/pie.php");
?>



