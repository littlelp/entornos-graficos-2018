<?php 
include_once ("includes/cabecera.php");
?>
		<div style="clear:both;"></div>	
	<div class= "container-fluid" id="contenido">
	
		<div class="row">

					
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2" style="float:center"  id="carousel">
				
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
								<img src="<?php echo $r1['imagen']; ?>" alt="First slide">
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
							<a href="empresa.php"><img src="img/cupcake.png" style="width:100%" class ="center-block img-responsive  img-rounded"></a>
							
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="float:right" id="reseñader">	
							<h6><strong>NTG, Nueva Técnica Gastronómica</strong> es una empresa dedicada a la fabricación de maquinarias para la elaboración de pastas.</h6>
								<BR>
								<h6>Son máquinas simples y seguras, nuestra experiencia está al servicio de la mejor tradición alimenticia.</h6>
								<BR>
								<h6>Estamos ubicados en el centro de la República Argentina, más precisamente en la ciudad de Rufino, provincia de Santa Fe.</h6>
								<BR>
								<h6>En la actualidad han confiado en nosotros fábricas de pastas en nuestro país, Paraguay, Uruguay, Colombia, Brasil, EE.UU, Chile, España, entre otros.</h6>
								<BR>
								<h6>NTG tiene su domicilio en Alberdi 475, de la ciudad de Rufino, C.P. 6100, Telefax 03382-429951, Email ventas@ntgpastas.com.ar.</h6>
								<BR>	
								
						</div>
					</div>
				</div>
				
				
				<div class="col-md-3 col-lg-3 hidden-sm-down" style="float:right" id="facebook">
					<div class="fb-page" data-href="https://www.facebook.com/ntgpastas.panquequeras" data-tabs="timeline,messages" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ntgpastas.panquequeras" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ntgpastas.panquequeras">NTG Pastas Panquequeras</a></blockquote></div>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " style="float:center" id="novedades" >
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 " style="float:left" id="imggg" >
						<img src="img/novedades.png" style="width:100%" class ="img-responsive">
						
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
							<div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 " style="float:left" id="img" >
								<a href="novedad.php?nov=<?php echo $r9['idNovedades']; ?>"><img src="<?php echo $r9['imagen']; ?>" style="height:150px" class ="center-block img-responsive img-thumbnail img-rounded"></a>
							
							</div>
							
							<div class="col-xs-7 col-sm-7 col-md-8 col-lg-8 " style="float:left" id="cont" >
								
								<p id="TitNov"><?php echo $r9["titulo"];?></p>
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
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 " style="float:left" id="imggg" >
					
					
						<img src="img/destacado.png" style="width:100%" class ="img-responsive">
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
								<a href="producto.php?prod=<?php echo $r['idProducto']; ?>"><img class="img-fluid center-block" style="height:260px"  src="<?php echo $r['imagen'] ?>" href="producto.php?prod=<?php echo $r['idProducto'] ?>" alt="Card image cap"></a>
								<div class="card-block">
									<h4 class="card-title"><?php echo $r["nombre"];?></h4>
									<p class="card-text"><?php echo $r["descripcion"];?></p>
									<div style="clear:both;"></div>
									<!--<a href="producto.php?prod=<?php echo $r['idProducto'] ?>" class="btn btn-primary">+ Info</a>-->
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
	