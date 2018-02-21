<?php

include_once ("includes/cabecera.php");

if(isset($_SESSION['tipous'])){

if($_SESSION['tipous']==1){	

?>

	<div class= "container-fluid" id="contenidoeditcat">

		<div class="row">



					<div class="col-xs-8 col-sm-8 col-md-8 col-md-offset-1">
						<h1>Modificar Categoria</h1>
						<br>
						
</div>	
			<?php
			settype($_GET["id"], "integer");
				$sql1 = "select * from categoria where idCategoria =" . $_GET["id"];

				$rs1 = mysqli_query($db, $sql1);
				
					while ($r = mysqli_fetch_array($rs1) ) {
				?>
					
				<br /><br />
				
					<div class="col-xs-10 col-sm-10 col-md-10 col-md-offset-1">

						<form action="modificar-categoria.php?id=<?php  echo $r["idCategoria"]; ?>" method="post">
							
							<div class="md-form">
								<i class="fa  fa-male  prefix"></i>
								<input  value="<?php  echo $r["nombre"]; ?>" type="text" name="Nombre" class="form-control validate" maxlength="30" required>
								<label for="Nombre">Nombre:</label>
							</div>
		
		
							<div class="md-form">
								<i class="fa  fa-male  prefix"></i>
								<input  value="<?php  echo $r["descripcion"]; ?>" type="text" name="Descripcion" class="form-control validate" maxlength="30" required>
								<label for="Descripcion">Descripcion:</label>
							</div>
					<?php }?>
							<button type="submit" class="btn btn-default">Modificar</button>																		
                                   
					</div>
				
		</div>

	</div>

<?php 
}}
else {echo'<script language="javascript">window.location="index.php"</script>;';}
include_once ("includes/pie.php");
?>