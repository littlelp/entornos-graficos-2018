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
									</tr>
							</thead>
							<tbody>
									<?php
								$sql = "select *
										from producto_consulta_mayorista pcm
										inner join producto p on p.idProducto = pcm.idProducto
										where pcm.idConsultaMayorista = " . $_GET["id"] ."
										order by pcm.idProductoConsultaMayorista";

								$rs = mysqli_query($db, $sql);
								if ( $rs ) {
									while ($r = mysqli_fetch_array($rs) ) {															
								?>
					<tr>											
							<td><?php  echo $r["nombre"]; ?></td>
							<td><?php  echo $r["cantidad"]; ?></td>																							
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