<?php

include_once ("includes/cabecera.php");

if(isset($_SESSION['tipous'])){

if($_SESSION['tipous']==1){
?>

	<div class= "container-fluid" id="contenidoeditcat">

		<div class="row">



					<div class="col-xs-8 col-sm-8 col-md-8 col-md-offset-1">
						<h1>Modificar Usuario</h1>
						<br>
						
</div>	
			<?php
			settype($_GET["id"], "integer");
				$sql1 = "select u.idUsuario as 'idUsuario', u.nombre as 'nombre', u.apellido as 'apellido', u.usuario as 'user', u.contrasena as 'contrasena',
				u.email as 'email', u.fechaAlta as 'fechaAlta', tu.descripcion as 'tipou', u.tipous as 'tipouse'
							from usuario u
							inner join tipousuario tu on
							u.tipous=tu.idTipoUsuario
							where u.idUsuario=" . $_GET["id"];

				$rs1 = mysqli_query($db, $sql1);
				
					while ($r = mysqli_fetch_array($rs1) ) {
				?>
					
				<br /><br />
				
					<div class="col-xs-10 col-sm-10 col-md-10 col-md-offset-1">

						<form id="formModificarUsuario" action="modificar-user.php?id=<?php  echo $r["idUsuario"]; ?>" method="post">
							
							<div class="md-form">
								<i class="fa  fa-male  prefix"></i>
								<input  value="<?php  echo $r["nombre"]; ?>" type="text" name="Nombre" class="form-control validate" maxlength="30" required>
								<label for="Nombre">Nombre:</label>
							</div>
		
		
							<div class="md-form">
								<i class="fa  fa-male  prefix"></i>
								<input  value="<?php  echo $r["apellido"]; ?>" type="text" name="Apellido" class="form-control validate" maxlength="30" required>
								<label for="Apellido">Apellido:</label>
							</div>
		
						
						<label>Tipo de Usuario</label>
						<select id= "selTipoUsu" name="tipouser" class="mdb-select" required>
							
							<?php
										
										
										$sql2= "select * from tipousuario ";

										$rs2= mysqli_query($db, $sql2);
										if ( $rs2 ) {
										while ($tipou = mysqli_fetch_array($rs2))
										{
											if($r['tipouse']==$tipou['idTipoUsuario']){$sel=' "selected> ';}
											
											else {$sel='"> ';}?>
											
											<option value="<?php  echo $tipou["idTipoUsuario"].$sel.$tipou['descripcion'];?></option>;
												
																						<?php	}}?>
									
							
								
							</select>
							
						
								<div class="md-form">
								<i class="fa fa-envelope prefix"></i>
								<input value="<?php  echo $r["email"]; ?>" type="email" name="Email" class="form-control validate" maxlength="40" required>
								<label for="Email">E-Mail:</label>
							</div>


							<div class="md-form">
								<i class="fa fa-user prefix"></i>
								<input  value="<?php  echo $r["user"]; ?>" type="text" name="usuario" class="form-control validate" maxlength="15" required>
								<label for="Usuario">Usuario:</label>
							</div>		
		
						                               
		
																								<?php }?>
				
							<button id="btnFormModificarUsuario" type="submit" class="btn btn-default">Modificar</button>																		
                                   
					</div>
				
		</div>

	</div>
<script>
	
	$(document).ready(function() {
		$('.mdb-select').material_select();
		});

</script>
<?php 
}}
else {echo'<script language="javascript">window.location="index.php"</script>;';}
include_once ("includes/pie.php");
?>