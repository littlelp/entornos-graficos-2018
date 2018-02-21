<?php 

include_once ("includes/cabecera.php");
include ("includes/funciones.php");


if(isset($_SESSION['tipous'])){

if($_SESSION['tipous']==1){	
?>
		
	<div class= "container-fluid" id="contenidoeditcat">
	
		<div class="row">

					
					
					<div class="col-xs-8 col-sm-8 col-md-8 col-md-offset-1">
						<h1>Listado de Novedades</h1>
					</div>
					<div class="col-xs-2 col-sm-2 col-md-2">
						<button type="button" class="btn btn-primary"  onClick="nueva()"><span class="glyphicon glyphicon-plus" aria-hidden="true"> Agregar Novedad</button>
					</div>
                
                
				
				<br /><br />
				<div class="row">
					<div class="col-xs-10 col-sm-10 col-md-10 col-md-offset-1">
                             <table class="table table-striped table-bordered table-hover" id="dataTables-addControls">
                                    <thead>
                                        <tr>
                                        	<th>Acciones</th>
                                            <th>Titulo</th>
                                            <th>Parrafo1</th>
                                            <th>Fecha Alta/Modificacion</th>
                                            <th>Borrar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
																								<?php 
																							$sql = "SELECT * from novedades ORDER BY titulo ";

																							$rs = mysqli_query($db, $sql);
																							if ( $rs ) {
																								while ($r = mysqli_fetch_array($rs) ) {
																							?>
                                        <tr>
											<td><button type="button" class="btn btn-warning"  onClick="editar(<?php echo $r["idNovedades"]; ?>)">Editar</button></td>
                                            <td><?php  echo $r["titulo"]; ?></td>
                                            <td><?php  echo $r["parrafo1"]; ?></td>
											<td><?php  echo $r["fechaAlta"]; ?></td>
                                            
                                            <td>
                                            	<button type="button" class="btn btn-danger" onClick="borrar(<?php echo $r["idNovedades"]; ?>)">Borrar</button>
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




    <!-- DataTables JavaScript -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>



    <script>
    $(document).ready(function() {
        $('#dataTables-addControls').dataTable();
    });

	function borrar(id) {
		location.href = "novedad-borrar.php?id=" + id;
	}

	function editar(id) {
		location.href = "novedades-editar.php?id=" + id;
	}

	function nueva(id) {
		location.href = "novedades-nueva.php";
	}
	
    </script>



		
	

	
<?php 
}}
else {echo'<script language="javascript">window.location="index.php"</script>;';}
include_once ("includes/pie.php");
?>



