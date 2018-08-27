<?php 				
									
include("includes/conexion.php");

?>
<!-- Productos -->
<div class="modal-dialog" role="document">
		<!--Content-->
		<div class="modal-content">
            <h3>Ingrese la dirección de envío</h3>
            <form id="formComprar" action="agregar-pedido.php" method="post">
                <div class="md-form">
                    <input  type="text" name="direccion" id="direccion" class="form-control validate" maxlength="50" required>
                    <label for="direccion">Dirección Envío:</label>
                </div>
			    <button id="btnFormComprar" class="btn btn-success comprar-btn" type="submit">Comprar</button>
            </form>
		</div>
		<!--/.Content-->
</div>