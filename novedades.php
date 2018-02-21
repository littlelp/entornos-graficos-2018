<?php 

include_once ("includes/cabecera.php");





?>
		
	<div class= "container-fluid" id="contenidoproducto">
	
		<div class="row">

					
				
				
				
				
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" style="float:right" id="productoder">
					<?php
						$sql2 = "select * from novedades order by fechaAlta desc";
						$rs2 = mysqli_query($db,$sql2);
						while ($r=mysqli_fetch_array($rs2)) {
					
					?>
					
					
					
					
					<div class="row">				
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="float:left" id="foto">
							<a href="novedad.php?nov=<?php echo $r['idNovedades'] ?>"><img src="<?php echo $r['imagen'] ?>" alt ="Imagen de Novedad" class ="center-block img-responsive img-thumbnail img-rounded"></a>
						</div>						
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5" style="float:center" id="nombreproducto">
							<p id="nombreProd"><strong><?php echo $r["titulo"];?></strong></p>
							<p id="descCorta"><?php echo $r["parrafo1"];?></p>
							<p style="text-align:right"><a href="novedad.php?nov=<?php echo $r['idNovedades'] ?>"><button type="button" class="btn btn-info"> + Info</button></a></p>
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

