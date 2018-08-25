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
					settype($_GET["cat"], "integer");
						$sql2 = "select * from producto where idCategoria = " . $_GET["cat"];
						$rs2 = mysqli_query($db,$sql2);
						while ($r=mysqli_fetch_array($rs2)) {
					
					?>
					
					
					
					
					<div class="row">				
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="float:left" id="foto-<?php echo $r['idProducto'] ?>">
							<a href="producto.php?prod=<?php echo $r['idProducto'] ?>"><img src="<?php echo $r['imagen'] ?>" alt="imagen de <?php echo $r['descripcion'];?> " class ="center-block img-responsive img-thumbnail img-rounded"></a>
						</div>						
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
							<p class="nombreProd" id="nombreProd-<?php echo $r['idProducto'] ?>"><?php echo $r["nombre"];?></p>
							<p class="descCorta" id="descCorta-<?php echo $r['idProducto'] ?>"><?php echo $r["descripcion"];?>
								<?php
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
							
							<p style="text-align:right"><a class="btn btn-primary" href="producto.php?prod=<?php echo $r['idProducto']; ?>">+ Info</a></p>
								<?php if(isset($_SESSION['tipous']) && $_SESSION['tipous']==2){ 
										if($r["stock"] > 0) {?>
											<p style="text-align:right"><a class="btn btn-primary" href="agregar-carrito.php?prod=<?php echo $r['idProducto']; ?>">Agregar al Carrito</a></p>
										<?php } else { ?>
											<p style="text-align:right"><a class="btn btn-secondary">No hay stock</a></p>
								<?php } } ?>
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

