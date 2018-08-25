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
		<table class="table table-striped table-bordered table-hover" id="dataTables-addControls">
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
	
		foreach ($_SESSION['carrito'] as $i => $producto) {						
			?>
			<tr>
			<td><?php  echo $producto["idProducto"]; ?></td>
			<td><?php  echo $producto["nombre"]; ?></td>
			<td><?php  echo $producto["precioLista"]; ?></td>			
			<td><?php  echo $producto["cantidad"]; ?></td>			
			<td>
			<button type="button" class="btn btn-danger" onClick="borrarp(<?php echo $r["idProducto"]; ?>)">Borrar</button>
			</td>
			</tr>
			<?php
		}														
		?>
		</tbody>
		</table>
		</div>
		</div>
		</div>
		
		</div>
		
		
		<script src="js/plugins/dataTables/jquery.dataTables.js"></script>
		<script src="js/plugins/dataTables/dataTables.bootstrap4.js"></script>
		
		
		
		<script>
		$(document).ready(function() {
			$('#dataTables-addControls').dataTable( {
				language: {
					"paginate": {
						"previous": "Anterior",
						"next": "Siguiente"
					},
					"search": "Buscar",
					"lengthMenu": "Mostrar _MENU_ registros"
				},
				responsive: true
			} );
		});
		
		function borrarp(id) {
			location.href = "productos-borrar.php?id=" + id;
		}
		
		function editar(id) {
			location.href = "productos-editar.php?id=" + id;
		}
		
		function nueva(id) {
			location.href = "productos-nueva.php";
		}
		
		</script>
		
		
		
		
		
		<?php
	}}
	else {echo'<script>window.location="index.php"</script>;';}
	include_once ("includes/pie.php");
	?>
	