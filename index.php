<?php 
include_once ("includes/cabecera.php");
?>
		<div style="clear:both;"></div>	
	<div class= "container-fluid" id="contenido">
	
		<div class="row">

					
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="float:center"   id="carousel">
				
					<!--Carousel Wrapper-->
					<div id="carousel-example-1" class="carousel slide carousel-fade" data-ride="carousel">
						<!--Indicators-->
						<ol class="carousel-indicators">
							<?php
								$sql5= "select * from carousel ";
								$rs16 = mysqli_query($db,$sql5);
								$i=0;
								while ($r3=mysqli_fetch_array($rs16)) {
									
							
										?>
							<li data-target="#carousel-example-1" data-slide-to="<?php echo $i;?>" <?php if($i==0) {echo ' class="active"';}?>></li>
							
							<?php
							$i++;
								}
							?>
							
						</ol>
						<!--/.Indicators-->

						<!--Slides-->
						<div class="carousel-inner" role="listbox">
							<?php
							$j=0;
							$rs13 = mysqli_query($db,$sql5);
							while ($r1=mysqli_fetch_array($rs13)) {
									
							
										?><!--First slide-->
							<div class="carousel-item <?php if($j==0) {echo ' active';}?>">
								<img src="<?php echo $r1['imagen']; ?>" style="width:100%" class ="center-block img-responsive" alt="Imagen de <?php echo $r1['nombre']; ?>">
							</div>
							
							<?php $j++; 
									} ?>
						</div>
						<!--/.Slides-->

						<!--Controls-->
						<a class="left carousel-control" href="#carousel-example-1" role="button" data-slide="prev">
							<span class="icon-prev" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-example-1" role="button" data-slide="next">
							<span class="icon-next" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
						<!--/.Controls-->
					</div>
					<!--/.Carousel Wrapper-->

				</div>
				<div style="clear:both;"></div>
				
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 " style="float:left" id="reseña" >
					<BR>
					
					<div class="row">
						
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1" style="float:left" id="reseñaizq" >
							<?php $sql1 = "select imagenindex, contenidoindex from web";

				$rs1 = mysqli_query($db, $sql1);
				
					while ($r = mysqli_fetch_array($rs1) ) {
						
						?>
							<a href="empresa.php"><img src="<?php echo $r["imagenindex"];?>" alt ="Imagen de Empresa"style="width:80%" class ="center-block img-responsive  img-rounded"></a>
							
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="float:right" id="reseñader">	
						
					
						<?php
					echo $r["contenidoindex"];}
						
						?>

								
								
						</div>
					</div>
				</div>
				
				
				<div class="col-md-3 col-lg-3 hidden-sm-down" style="float:right" id="facebook">
					<div class="fb-page" data-href="https://www.facebook.com/ElBatidortienelaculpa" data-tabs="timeline,messages" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ElBatidortienelaculpa" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ElBatidortienelaculpa">La Chocolateria</a></blockquote></div>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " style="float:center" id="novedades" >
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " style="float:left" id="imggg" >
						<h1 style="background-color: #CAD7F2;padding: 1%;">Novedades</h1>
						
					</div>
					
					<br>
					<div style="clear:both;"></div>
					<?php
								$sql29 = "select * from novedades order by fechaAlta desc LIMIT 4";
								$rs29 = mysqli_query($db,$sql29);
								while ($r9=mysqli_fetch_array($rs29)) {
							
										?>
					
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 " style="float:center" id="novedad" >
					
						<div class="row">
							<div class="col-xs-7 col-sm-7 col-md-4 col-lg-4 " style="float:left" id="img" >
								<a href="novedad.php?nov=<?php echo $r9['idNovedades']; ?>"><img src="<?php echo $r9['imagen']; ?>" alt="Imagen de novedades" style="height:auto" class ="center-block img-responsive img-thumbnail img-rounded"></a>
							
							</div>
							
							<div class="col-xs-5 col-sm-5 col-md-8 col-lg-8 " style="float:left" id="cont" >
								
								<a href="novedad.php?nov=<?php echo $r9['idNovedades']; ?>" style="text-decoration:none; color:#212121" ><p id="TitNov"><strong><?php echo $r9["titulo"];?></strong></p></a>
								<p id="descCorta"><?php echo $r9["parrafo1"];?></p>
								
							
							</div>
							<hr/>
						</div>
						<br>
					</div>
					
					<?php } ?>
					<p style="text-align:right" ><a href="novedades.php" class="btn btn-info btn-rounded">Ver Todas</a></p>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " style="float:center" id="destacados" >
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " style="float:left" id="imggg" >
					
					
						<h1 style="background-color: #CAD7F2;padding: 1%;">Productos Destacados</h1>
						<div style="clear:both;"></div>
					</div>
					<div style="clear:both;"></div>
						<div class="card-group">
						
						
														<?php
								$sql2 = "select * from producto where destacado = 'on' ";
								$rs2 = mysqli_query($db,$sql2);
								while ($r=mysqli_fetch_array($rs2)) {
							
										?>
							<div class="card" display: "flex;">
								<a href="producto.php?prod=<?php echo $r['idProducto']; ?>"><img class="img-fluid center-block" style="height:auto" alt="Imagen de <?php echo $r['nombre'];?>"  src="<?php echo $r['imagen'] ?>"></a>
								<div class="card-block">
									<a href="producto.php?prod=<?php echo $r['idProducto']; ?>" style="text-decoration:none; color:#99603E"><h4 class="card-title"><?php echo $r["nombre"];?></h4></a>
									<p class="card-text"><?php echo $r["descripcion"];?></p>
									<div style="clear:both;"></div>
			
								</div>
							</div>
							
							<?php } ?>
						</div>
						
				</div>
				
				
		</div>
		
	</div>

	
<?php 
include_once ("includes/pie.php");
?>
	