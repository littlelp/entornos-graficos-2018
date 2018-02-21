<?php
include("includes/conexion.php");
session_start();

?>
<head>
    

    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/> 
	<style>
			body { font-family: verdana, sans-serif;} 
			table {
			  margin-bottom: 2em;
			}

			thead {
			  background-color: #eeeeee;
			}

			tbody {
			  background-color: #ffffee;
			}

			th,td {
			  padding: 3pt;
			}

			table.separate {
			  border-collapse: separate;
			  border-spacing: 5pt;
			  border: 3pt solid #33d;
			}

			table.separate td {
			  border: 2pt solid #33d;
			}

			table.collapse {
			  border-collapse: collapse;
			  border: 1pt solid black;  
			}

			table.collapse td {
			  border: 1pt solid black;
			}
</style>
  
 </head>	
<body>
	
	<div id="Cab-precios">
	
		
		<p style="text-align:Center">Lista de Precios:</p>
	
	</div>	

					
				
				
	<div id="precios" >
		
				<table class="collapse"> 
					<thead>
					  <tr>
							<td>Producto</td>
							<td>Descripcion</td>
							<td>Precio Revendedor</td>
							<td>Precio Lista</td>
						</tr>
					</thead>
					
					<tbody>
						<?php	 
						$sql = "select * from producto ";
						$rs = mysqli_query($db,$sql);
						$r=mysqli_fetch_array($rs);
						
						while ($r=mysqli_fetch_array($rs)){?>
						
					<tr>
						<td><?php echo $r["nombre"];?></td>
						<td><?php echo $r["descripcion"];?></td>
						<td><?php if(isset($_SESSION['tipous'])){
									if($_SESSION["tipous"]==2){ echo '$'.$r["precio1"];}
									if($_SESSION["tipous"]==3){ echo '$'.$r["precio2"];}
									if($_SESSION["tipous"]==4){ echo '$'.$r["precio3"];}
									if($_SESSION["tipous"]==5){ echo '$'.$r["precio4"];}?></td>
						<td><?php if($_SESSION["tipous"]>0){ echo '$'.$r["precioLista"];}}?></td>
					</tr>
								<?php }?>

					  </tbody>
					</table>


		
		  
								
				</table>			
					
	</div>
				
				
	</body>	
	

