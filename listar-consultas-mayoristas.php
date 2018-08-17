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
					<h1>Listado de Consultas Mayoristas</h1>
				</div>
				<br /><br />
				<div class="row">
					<div class="col-xs-10 col-sm-10 col-md-10 col-md-offset-1">
						<table class="table table-striped table-bordered table-hover" id="dataTables-addControls">
									<thead>
											<tr>
													<th>ID Consulta</th>
													<th>Consulta</th>
													<th>Usuario</th>
													<th>Visualizar Productos</th>
													<th>Borrar</th>
											</tr>
									</thead>
									<tbody>
														<?php
														$sql = "";
														if($_SESSION['tipous']>1){
															$sql = "select *
															from consulta_mayorista cm
															left join usuario u on u.idUsuario = cm.idUsuario
															where cm.idUsuario = " . $_SESSION["idUsuario"] ."
															order by cm.idConsulta";
														} else {
															$sql = "select *
															from consulta_mayorista cm
															left join usuario u on u.idUsuario = cm.idUsuario
															order by cm.idConsulta";
														}

														$rs = mysqli_query($db, $sql);
														if ( $rs ) {
															while ($r = mysqli_fetch_array($rs) ) {															
														?>
											<tr>											
													<td><?php  echo $r["idConsulta"]; ?></td>
													<td><?php  echo $r["consulta"]; ?></td>																							
													<td><?php  echo $r["usuario"]; ?></td>																							
													<td><button type="button" class="btn btn-warning" onClick="verproductos(<?php echo $r["idConsulta"]; ?>)" >Ver Productos</button></td>
													<td>
														<button type="button" class="btn btn-danger" onClick="borrarcm(<?php echo $r["idConsulta"]; ?>)">Borrar</button>
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
	<div class="modal fade modal-ext" id="modal-ver-productos" tabindex="-1" role="dialog" aria-hidden="true">
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
				$.get("modal-ver-productos.php?id=" + id, function(data){
					$("#modal-ver-productos").html(data);
					$('#modal-ver-productos').modal('show');
				});
			};

			function borrarcm(id) {
				location.href = "consulta-borrar.php?id=" + id;
			}

</script>





<?php
}}
else {echo'<script>window.location="index.php"</script>;';}
include_once ("includes/pie.php");
?>
