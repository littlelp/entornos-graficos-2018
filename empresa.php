<?php 
include_once ("includes/cabecera.php");
?>
		
	<div class= "container-fluid" id="contenidoempresa">
	
		<div class="row">

					
				
				
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="float:left" id="empresaizq" >
				
					<?php $sql1 = "select imagenempresa, contenidoempresa from web";

				$rs1 = mysqli_query($db, $sql1);
				
					while ($r = mysqli_fetch_array($rs1) ) {
						
						?>
					<BR>
					<img src="<?php echo $r["imagenempresa"];?>" alt="Imagen Empresa" class ="center-block img-responsive img-thumbnail img-rounded">
					
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="float:right" id="empresader">
				
				<?php
					echo $r["contenidoempresa"];}
						
						?>
				</div>	
		</div>
	</div>
		
	

	
<?php 
include_once ("includes/pie.php");
?>