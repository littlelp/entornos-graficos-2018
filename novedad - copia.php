<?php 

include_once ("includes/cabecera.php");

?>
		
	<div class= "container-fluid" id="contenidonovedad">
	
		<div class="row">

					
				
				<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11" style="float:right" id="Novder">
					<?php
					settype($_GET["nov"], "integer");
						$sql = "select * from novedades where idNovedades = " . $_GET["nov"];
						$rs = mysqli_query($db,$sql);
						while ($r=mysqli_fetch_array($rs)) {
					
					?>
					
					
					
					
					<div class="row">				
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="float:left" id="foto">
							<img src="<?php echo $r['imagen'] ?>" class ="center-block img-responsive img-thumbnail img-rounded">
							<br>	
							

						</div>						
						<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8" style="float:center" id="titulonov">
							<p id="titulonov"><?php echo $r["titulo"];?></p>
							<p id="descCorta"><?php echo $r["parrafo1"];?></p>
							<br>
							<p id="descCorta"><?php echo $r["parrafo2"];?></p>
							<br>
							<p id="descCorta"><?php echo $r["parrafo3"];?></p>
							<br>
							<p style="text-align:right"><a href="novedades.php"><button type="button" class="btn btn-default"> Volver</button></a></p>
							
							
							
						</div>				
					</div>
					<hr/>
				
						<?php } ?>
				
				
				
					
				</div>	
		</div>
	</div>
		
	

	
<?php 
include_once ("includes/pie.php");
?>



