<?php

include_once ("includes/cabecera.php");
include ("includes/funciones.php");

if(isset($_SESSION['tipous'])){

if($_SESSION['tipous']==1){


?>

	<div class= "container-fluid" id="contenidoeditcat">

		<div class="row">



					<div class="col-xs-8 col-sm- col-md-8 col-md-offset-1">
						<h1>Listado de Productos</h1>
					</div>
					<div class="col-xs-2 col-sm-2 col-md-2">
						<button type="button" class="btn btn-primary"  onClick="nueva()"><span class="glyphicon glyphicon-plus" aria-hidden="true"> Agregar Productos</button>
					</div>



				<br /><br />
				<div class="row">
					<div class="col-xs-10 col-sm-10 col-md-10 col-md-offset-1">
                             <table class="table table-striped table-bordered table-hover" id="dataTables-addControls">
                                    <thead>
                                        <tr>
                                        	<th>Acciones</th>
                                            <th>ID Producto</th>
                                            <th>Nombre</th>
											<th>Categoria</th>
											<th>Precio Lista</th>
											<th>Precio Rev 1</th>
											<th>Precio Rev 2</th>
											<th>Precio Rev 3</th>
											<th>Precio Rev 4</th>
											<th>Destacado</th>
                                            <th>Borrar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
																								<?php
																							$sql = "select p.nombre as 'nombre', p.caracteristicas as 'caracteristicas', p.descripcion as 'descripcion', p.dimensiones as 'dimensiones', p.especificaciones as 'especificaciones', p.idProducto as 'idProducto', p.imagen as 'imagen', p.video as 'video', c.nombre as 'categoria', p.precio1 as 'precio1', p.precio2 as 'precio2', p.precio3 as 'precio3', p.precio4 as 'precio4', p.precioLista as 'precioLista', p.destacado as 'destacado'
																									from producto p
																									inner join categoria c on
																									p.idCategoria=c.idCategoria
																									order by idProducto ";

																							$rs = mysqli_query($db, $sql);
																							if ( $rs ) {
																								while ($r = mysqli_fetch_array($rs) ) {
																							?>
                                        <tr>
											<td><button type="button" class="btn btn-warning"  onClick="editar(<?php echo $r["idProducto"]; ?>)">Editar</button></td>
                                            <td><?php  echo $r["idProducto"]; ?></td>
                                            <td><?php  echo $r["nombre"]; ?></td>
											<td><?php  echo $r["categoria"]; ?></td>
											<td><?php  echo $r["precioLista"]; ?></td>
											<td><?php  echo $r["precio1"]; ?></td>
											<td><?php  echo $r["precio2"]; ?></td>
											<td><?php  echo $r["precio3"]; ?></td>
											<td><?php  echo $r["precio4"]; ?></td>
											<td><?php  if($r["destacado"]=='on'){echo'SI';} else{echo 'NO';} ?></td>

                                            <td>
                                            	<button type="button" class="btn btn-danger" onClick="borrarp(<?php echo $r["idProducto"]; ?>)">Borrar</button>
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


    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap4.js"></script>



    <script>
    $(document).ready(function() {
        $('#dataTables-addControls').dataTable( {
			language: {
				"paginate": {
					"previous": "Anterior",
					"next": "Siguiente"
				}
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
else {echo'<script language="javascript">window.location="index.php"</script>;';}
include_once ("includes/pie.php");
?>
