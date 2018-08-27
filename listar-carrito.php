<?php

include_once ("includes/cabecera.php");
include ("includes/funciones.php");

if(isset($_SESSION['tipous'])){
	
	if($_SESSION['tipous']==2){
		
		
		?>
		
		<div class= "container-fluid" id="contenidoeditcat">
		
		<div class="row">
		
		
		
		<div class="col-xs-8 col-sm- col-md-8 col-md-offset-1">
		<h1>Productos Agregados al Carrito</h1>
		</div>
		
		<br /><br />
		<div class="row">
		<div class="col-xs-10 col-sm-10 col-md-10 col-md-offset-1">
		<table class="table table-striped table-bordered table-hover lista-carrito" id="dataTables-addControls">
		<thead>
		<tr>
		<th>ID Producto</th>
		<th>Nombre</th>
		<th>Precio</th>
		<th>Cantidad</th>
		<th>Borrar</th>
		</tr>
		</thead>
		<tbody>
		<?php
		$total = 0;
		foreach ($_SESSION['carrito'] as $i => $producto) {	
			$total = $total + ($producto["precioLista"] * $producto["cantidad"]);					
			?>
			<tr>
			<td><?php  echo $producto["idProducto"]; ?></td>
			<td><?php  echo $producto["nombre"]; ?></td>
			<td><?php  echo $producto["precioLista"]; ?></td>			
			<td class="cantidad">
				<?php  echo $producto["cantidad"]; ?>
				<div class="cambiar-cantidad">
					<button type="button" class="btn btn-primary" onClick="cambiarCantidad('sumar', <?php echo $producto["idProducto"]; ?>)">
						<i class="fa fa-plus"></i>
					</button>
					<button type="button" class="btn btn-primary" onClick="cambiarCantidad('restar', <?php echo $producto["idProducto"]; ?>)">
						<i class="fa fa-minus"></i>
					</button>
				</div>

			</td>			
			<td>
			<button type="button" class="btn btn-danger" onClick="borrarp(<?php echo $producto["idProducto"]; ?>)">Borrar</button>
			</td>
			</tr>
			<?php
		}
		?>
		</tbody>
		</table>
		<div class="total-carrito">
			Total: $<?php echo $total ?>
			<br>
			<button type="button" class="btn btn-success comprar-btn" id="botonComprar" onClick="comprar()">Comprar</button>
		</div>
		</div>
		</div>
		</div>
		
		</div>
		
		<div class="modal fade modal-ext" id="modal-comprar" tabindex="-1" role="dialog" aria-hidden="true">
		</div>
		
		<script src="js/plugins/dataTables/jquery.dataTables.js"></script>
		<script src="js/plugins/dataTables/dataTables.bootstrap4.js"></script>
		
		
		
		<script>
		$(document).ready(function() {
			$('#dataTables-addControls').dataTable( {
				paging: false,
				bInfo : false,
				searching: false,
				responsive: true,
			} );

		});
		
		function borrarp(id) {
			location.href = "borrar-producto-carrito.php?id=" + id;
		}

		function cambiarCantidad(operacion, id) {
			location.href = "cambiar-cantidad.php?operacion=" + operacion + '&id=' + id;
		}

		function comprar() {
				$.get("modal-comprar.php", function(data){
					$("#modal-comprar").html(data);
					$('#modal-comprar').modal('show');
					validarCompra();
				});
			}

		function validarCompra() {
			var btnForm = $('#btnFormComprar');
			$('#btnFormComprar').prop("disabled",true);
			$('#direccion').tooltip({ boundary: 'window', title:'Debe tener al menos 5 caracteres' })
			$('#formComprar').on("change keydown", function() {
				if(checkInput("#direccion")) {
					enableSubmit(btnForm);
				}else {
					disableSubmit(btnForm);
				}
			});
		}

		function checkInput(idInput) {
			return $(idInput).val().length > 4 ? true : false;
		}

		function enableSubmit (btnForm) {
			$(btnForm).prop("disabled",false);
		}

		function disableSubmit (btnForm) {
			$(btnForm).prop("disabled",true);
		}
		
		</script>
		
		
		
		
		
		<?php
	}}
	else {echo'<script>window.location="index.php"</script>;';}
	include_once ("includes/pie.php");
	?>
	