<?php 
include_once ("includes/cabecera.php");

$productosSinStock = "";

foreach ($_SESSION['carrito'] as $i => $producto) {	

	$sql = "SELECT * FROM producto WHERE idProducto = '". $producto['idProducto']. "'";
	$rsp1 = mysqli_query($db, $sql); 
	$p = mysqli_fetch_array($rsp1);

	if($producto["cantidad"] > $p['stock']){
		$productosSinStock .= $p['nombre'] . "<br> ";
	}
}

?>
<div class= "container-fluid" id="contenidoempresa">
    <h5 style="text-align:center">Error en el registro del pedido</h5>
    
    
		<h5 style="text-align:center" >Alguno de los productos que ingreso ya no posee stock suficiente</h5>
    <h5 style="text-align:center" ><strong><?php echo $productosSinStock ?></strong></h5>		

</div>		
<?php 
include_once ("includes/pie.php");
?>