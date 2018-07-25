<?php 

include_once ("includes/cabecera.php");

$sql1 = "Select idCategoria, nombre, descripcion
FROM categoria";


$rs1 = mysqli_query($db, $sql1);
?>
		
	<div class= "container-fluid" id="contenidoproducto">
	
		<div class="row">

					
				
				
				<div class="col-md-2 col-lg-2 hidden-sm-down" style="float:left" id="productoizq" >
					<BR>
						<div class="list-group">
							<?php
								while ($fila1 = mysqli_fetch_array($rs1)){
									
										echo '<a href="productos.php?cat='.$fila1['idCategoria'].'" class="list-group-item list-group-item-success">'.$fila1['nombre'].'</a>';}
							?>
						
						</div>	  
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" style="float:right" id="productoder">
					<?php
						settype($_GET["prod"], "integer");
						$sql = "select * from producto where idProducto = " . $_GET["prod"];
						$rs = mysqli_query($db,$sql);
						while ($r=mysqli_fetch_array($rs)) {
					
					?>
					
					
					
					
					<div class="row">				
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="float:left" id="foto">
							<img src="<?php echo $r['imagen'] ?>" alt="Imagen de <?php echo $r['descripcion'];?>" class ="center-block img-responsive img-thumbnail img-rounded">
							<br>	
							
							<?php
						if($r["video"]!=''){
						$u = explode("?v=", $r["video"]);
						$cod = $u[1];
						$enlace= '<iframe width="420" height="315" src="https://www.youtube.com/embed/'.$cod.'?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>';}
						else {$enlace= '';}
						
						
						
						
						
						?>
							
							
							
								<div class="video-container"><?php echo $enlace; ?></div>
						</div>						
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5" style="float:center" id="nombreproducto">
							<p id="nombreProd"><?php echo $r["nombre"];?></p>
							<p id="descCorta"><?php echo $r["descripcion"];?></p>
							<br>
							<?php if($r["especificaciones"]!=""){?>
							<p id="tituloprod">Especificaciones:</p>
							<p id="especificaciones"><?php echo $r["especificaciones"];?></p>
							<?php } ?>
							<br>
							<?php if($r["caracteristicas"]!=""){?>
							<p id="tituloprod">Caracteristicas:</p>
							<p id="caracteristicas"><?php echo $r["caracteristicas"];?></p>
							<?php } ?>
							<br>
							<?php if($r["dimensiones"]!=""){?>
							<p id="tituloprod">Dimensiones:</p>
							<p id="dimensiones"><?php echo $r["dimensiones"];?></p>
							<?php }
							if(isset($_SESSION['tipous'])){
									
									if($_SESSION['tipous']==2){
							?>
							<p id="tituloprod">Precio Mano de Obra: $ <?php echo $r["precio1"];?></p>
							<p id="tituloprod">Precio Lista: $ <?php echo $r["precioLista"];}?></p>
							<?php
									
									if($_SESSION['tipous']==3){
										?>
									<p id="tituloprod">Precio Mano de Obra: $ <?php echo $r["precio2"];?></p>
									<p id="tituloprod">Precio Lista: $ <?php echo $r["precioLista"];}?></p>
							<?php
									
									if($_SESSION['tipous']==4){
										?>
									<p id="tituloprod">Precio Mano de Obra: $ <?php echo $r["precio3"];?></p>
									<p id="tituloprod">Precio Lista: $ <?php echo $r["precioLista"];}?></p>
									
							<?php
									
									if($_SESSION['tipous']==5){
										?>
									<p id="tituloprod">Precio Mano de Obra:$ <?php echo $r["precio4"];?></p>
							<p id="tituloprod">Precio Lista: $ <?php echo $r["precioLista"];}}?></p>
							
							<p style="text-align:right"><a href="productos.php?cat=<?php echo $r["idCategoria"];?>"><button type="button" class="btn btn-default"> Volver</button></a></p>
									 
							
							
							
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



