<?php

include_once ("includes/cabecera.php");

if(isset($_SESSION['tipous'])){
									
									if($_SESSION['tipous']==1){
									
									
?>

	<div class= "container-fluid" id="contenidoeditcat">

		<div class="row">



					<div class="col-xs-8 col-sm-8 col-md-8 col-md-offset-1">
						<h1>Editar Novedad</h1>
						<br>
						
					</div>	
			
					
				<br /><br />
				
					<div class="col-xs-10 col-sm-10 col-md-10 col-md-offset-1">
									<?php
									settype($_GET["id"], "integer");
									$sql1 = "select *
											from novedades p
											where p.idNovedades=" . $_GET["id"];
									$rsp1 = mysqli_query($db, $sql1);
				
					$rp = mysqli_fetch_array($rsp1);
					
					?>
						<form action="modificar-novedad.php?id=<?php  echo $rp["idNovedades"]; ?>" method="post" enctype="multipart/form-data">
							
							<div class="md-form">
								<i class="fa  fa-male  prefix"></i>
								<input value="<?php  echo $rp["titulo"]; ?>"  type="text" name="Titulo" class="form-control validate" maxlength="30" required>
								<label for="Titulo">Titulo:</label>
							</div>
		
		
						
						<div class="md-form">
							<i class="fa fa-pencil prefix"></i>
							<textarea type="text" name="Parrafo1" class="md-textarea" length="160" maxlength="160" required><?php  echo $rp["parrafo1"]; ?></textarea>
							<label for="Parrafo1">Parrafo 1:</label>
						</div>
						
						<div class="md-form">
							<i class="fa fa-pencil prefix"></i>
							<textarea type="text" name="Parrafo2" class="md-textarea"><?php  echo $rp["parrafo2"]; ?></textarea>
							<label for="Parrafo2">Parrafo 2:</label>
						</div>
						
						<div class="md-form">
							<i class="fa fa-pencil prefix"></i>
							<textarea type="text" name="Parrafo3" class="md-textarea"><?php  echo $rp["parrafo3"]; ?></textarea>
							<label for="Parrafo3">Parrafo 3</label>
						</div>

					
							<div class="file-field">
								<div class="btn btn-primary">
									<span>Seleccione Imagen</span>
									<input name="Imagen" type="file">
								</div>
								<div class="file-path-wrapper">
								   <input class="file-path validate" type="text" placeholder="Subir Imagen">
								</div>
							</div>
						
	
							
							<?php //}?>						
				
							<button type="submit" class="btn btn-default">Modificar</button>																		
                                   
					</div>
				
						</form>
		</div>

	</div>
<script>
	
	

</script>
<?php 
}}
else {echo'<script language="javascript">window.location="index.php"</script>;';}
include_once ("includes/pie.php");
?>