<?php

include_once ("includes/cabecera.php");
include ("includes/funciones.php");

ini_set('display_errors', true);

if(isset($_SESSION['tipous'])){

if($_SESSION['tipous']>0){


?>

	<div class= "container-fluid" id="contenidoeditcat">

		<div class="row">
				<div class="col-xs-8 col-sm- col-md-8 col-md-offset-1">
					<h1>Listado de Mis Pedidos</h1>
				</div>
				<br /><br />
				<div class="row">
					<div class="col-xs-10 col-sm-10 col-md-10 col-md-offset-1">
						<table class="table table-striped table-bordered table-hover" id="dataTables-addControls">
									<thead>
											<tr>
													<th>ID Pedido</th>
													<th>Fecha Pedido</th>
													<th>Usuario</th>
													<th>Direccion envio</th>
													<th>Estado</th>
													<th>Total</th>
													<th>Ver Productos</th>
													<th>Acciones</th>
											</tr>
									</thead>
									<tbody>
														<?php
														$sql = "";

														if($_SESSION['tipous']>1){
															$sql = "select *
															from pedidos p
															left join usuario u on u.idUsuario = p.idUsuario
															where p.idUsuario = " . $_SESSION["idUsuario"] ."
															order by p.idPedido";
														} else {
															$sql = "select *
															from pedidos p
															left join usuario u on u.idUsuario = p.idUsuario
															order by p.idPedido";															
														}

														$rs = mysqli_query($db, $sql);
														if ( $rs ) {
															while ($r = mysqli_fetch_array($rs) ) {															
														?>
											<tr>											
													<td><?php  echo $r["idPedido"]; ?></td>
													<td><?php  echo $r["fechaPedido"]; ?></td>																							
													<td><?php  echo $r["usuario"]; ?></td>																							
													<td><?php  echo $r["direccionEnvio"]; ?></td>																							
													<td><?php  echo $r["estado"]; ?></td>																							
													<td><?php  echo $r["total"]; ?></td>																							
													<td><button type="button" class="btn btn-warning" onClick="verproductos(<?php echo $r["idPedido"]; ?>)" >Ver Productos</button></td>
													<td>
													  <?php if($r["estado"] == 'pendiente'){ 															
															if($_SESSION['tipous'] < 2){ ?>
																<button type="button" class="btn btn-success" onClick="aceptarpedido(<?php echo $r["idPedido"]; ?>)">Aceptar</button>
															<?php } ?>
															<button type="button" class="btn btn-danger" onClick="cancelarpedido(<?php echo $r["idPedido"]; ?>)">Cancelar</button>														
														<?php } ?>
													</td>
	</tr>
					<?php
						}
					}
					?>
									</tbody>
							</table>
					</div>
				</div>
		</div>

	</div>

	<!-- Modal -->
	<div class="modal fade modal-ext" id="modal-ver-productos-pedidos" tabindex="-1" role="dialog" aria-hidden="true">
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
			});

		});
	
		function verproductos(id) {
				$.get("modal-ver-productos-pedidos.php?id=" + id, function(data){
					$("#modal-ver-productos-pedidos").html(data);
					$('#modal-ver-productos-pedidos').modal('show');
				});
			};

			function cancelarpedido(id) {
				location.href = "cancelar-pedido.php?id=" + id;
			}

			function aceptarpedido(id) {
				location.href = "aceptar-pedido.php?id=" + id;
			}

</script>





<?php
}}
else {echo'<script>window.location="index.php"</script>;';}
include_once ("includes/pie.php");
?>
