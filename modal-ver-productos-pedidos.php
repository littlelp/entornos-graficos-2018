<?php 				
									
include("includes/conexion.php");
settype($_GET["id"], "integer");

?>
<!-- Productos -->
<div class="modal-dialog" role="document">
		<!--Content-->
		<div class="modal-content">

		<!--Body-->
		<table class="table table-striped table-bordered table-hover" id="dataTables-addControls">
							<thead>
									<tr>
											<th>Producto</th>
											<th>Cantidad</th>
											<th>Precio Unitario</th>
									</tr>
							</thead>
							<tbody>
									<?php
								$sql = "select *
										from productos_pedidos pp
										inner join producto p on p.idProducto = pp.idProducto
										where pp.idPedido = " . $_GET["id"] ."
										order by pp.idPedido";

								$rs = mysqli_query($db, $sql);
								if ( $rs ) {
									while ($r = mysqli_fetch_array($rs) ) {															
								?>
					<tr>											
							<td><?php  echo $r["nombre"]; ?></td>
							<td><?php  echo $r["cantidad"]; ?></td>																							
							<td><?php  echo $r["precioLista"]; ?></td>																							
									</tr>
								<?php
									}
								}
								?>
					</tbody>
				</table>
		</div>
		<!--/.Content-->
</div>