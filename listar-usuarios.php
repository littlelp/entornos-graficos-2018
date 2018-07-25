<?php

include_once ("includes/cabecera.php");
include ("includes/funciones.php");

if(isset($_SESSION['tipous'])){

if($_SESSION['tipous']==1){	
?>
                                
<!-- Modal Subscription -->
<div class="modal fade modal-ext" id="modal-subscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Reestablecer Contraseña</h4>
            </div>
           <form action="contra.php" method="post"> <!--Body-->
				<div class="modal-body">
					<p>Ingrese su contraseña nueva</p>
					<br>
					<div class="md-form">
						<i class="fa fa-lock prefix"></i>
						<input type="password" name="pass" id="pass" class="form-control">
						<label for="pass">Contraseña</label>
					</div>
					
					<div class="text-xs-center">
						<button class="btn btn-primary">Cambiar</button>
					</div>
				</div>
				<!--Footer-->
				<div class="modal-footer">
					<button type="submit" class="btn btn-default" data-dismiss="modal">Volver</button>
				</div>
			</form>
        </div>
        <!--/.Content-->
    </div>
</div>



	<div class= "container-fluid" id="contenidoeditcat">

		<div class="row">



					<div class="col-xs-8 col-sm-8 col-md-8 col-md-offset-1">
						<h1>Listado de Usuarios</h1>
					</div>
					<div class="col-xs-2 col-sm-2 col-md-2">
						<button type="button" class="btn btn-primary"  onClick="nuevous()"><span class="glyphicon glyphicon-plus" aria-hidden="true"> Nuevo Usuario</button>
					</div>



				<br /><br />
				<div class="row">
					<div class="col-xs-10 col-sm-10 col-md-10 col-md-offset-1">
                             <table class="table table-striped table-bordered table-hover" id="dataTables-addControls">
                                    <thead>
                                        <tr>
                                        	<th>Acciones</th>
                                            <th>ID Usuario</th>
                                            <th>Nombre</th>
																						<th>Apellido</th>
																						<th>Tipo Usuario</th>
																						<th>Usuario</th>
																						<th>Contraseña</th>
																						<th>E-mail</th>
																						<th>Fecha Alta/Modificacion</th>
                                            <th>Borrar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
																								<?php
																							$sql1 = "select u.idUsuario as 'idUsuario', u.nombre as 'nombre', u.apellido as 'apellido', u.usuario as 'user', u.contrasena as 'contrasena',
																							u.email as 'email', u.fechaAlta as 'fechaAlta', tu.descripcion as 'tipou'
																										from usuario u
																										inner join tipousuario tu on
																										u.tipous=tu.idTipoUsuario";

																							$rs1 = mysqli_query($db, $sql1);
																							if ( $rs1 ) {
																								while ($r = mysqli_fetch_array($rs1) ) {
																							?>
                                        <tr>
											<td><button type="button" class="btn btn-warning"  onClick="editaru(<?php echo $r["idUsuario"]; ?>)">Editar</button></td>
                                            <td><?php  echo $r["idUsuario"]; ?></td>
                                            <td><?php  echo $r["nombre"]; ?></td>
																						<td><?php  echo $r["apellido"]; ?></td>
																						<td><?php  echo $r["tipou"]; ?></td>
																						<td><?php  echo $r["user"]; ?></td>
																						<td> <button type="button" class="btn btn-secondary" onClick="rpass(<?php echo $r["idUsuario"];?>)">Reestablecer</button> </td>
																						<td><?php  echo $r["email"]; ?></td>
																						<td><?php  echo $r["fechaAlta"]; ?></td>

                                            <td>
                                            	<button type="button" class="btn btn-danger" onClick="borrarus(<?php echo $r["idUsuario"];?>)">Borrar</button>
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
	
	function rpass(id){
		location.href = "contrasena-rest.php?id=" + id;
		
	}
	
	function borrarus(id) {
		location.href = "usuarios-borrar.php?id=" + id;
	}

	function editaru(id) {
		location.href = "usuarios-editar.php?id=" + id;
	}

	function nuevous() {
		location.href = "usuarios-nueva.php";
	}

    </script>



<?php 
}}
else {echo'<script language="javascript">window.location="index.php"</script>;';}
include_once ("includes/pie.php");
?>
