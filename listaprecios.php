<?php 

include_once ("includes/cabecera.php");
if(isset($_SESSION['tipous'])){

if($_SESSION['tipous']>0){	
?>

		
	<div class= "container-fluid" id="contenidoprecios">
	
		<div class="row">

					
				
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="float:center" id="cabprecios">
					
							
						<h4 style="text-align:Center"><strong>Lista de Precios</strong></h4>
	
				</div>	
				
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="float:center" id="bodyprecios">
				
					<table border="1" align="center" cellspacing="0">
						<thead>
						  <tr valign="bottom" align="center">
								<td><strong>Producto</strong></th>
								<td><strong>Descripcion</strong></th>
								<td><strong>Precio Mano de Obra</strong></th>
								<td><strong>Precio Lista</strong></th>
							</tr>
						</thead>
						
						<tbody>
							<?php	 
							$sql = "select * from producto ";
							$rs = mysqli_query($db,$sql);
							
							
							while ($r=mysqli_fetch_array($rs)){?>
							
						<tr>
							<td><?php echo $r["nombre"];?></td>
							<td><?php echo $r["descripcion"];?></td>
							<td><?php if(isset($_SESSION['tipous'])){
										 echo '$'.$r["precio1"];?></td>
							<td><?php if($_SESSION["tipous"]>0){ echo '$'.$r["precioLista"];}}?></td>
						</tr>
									<?php }?>

						  </tbody>
					</table>
					<p style="text-align:Center"><input type="button" id="btnImprimir" name="imprimir" value="Imprimir Lista" class=" oculto btn success-rounded-outline waves-effect" onclick="window.print();"></p>
				
				</div>
				
		</div>
	</div>
		
	

	
<?php 
}}
else {echo'<script language="javascript">window.location="index.php"</script>;';}
include_once ("includes/pie.php");
?>



