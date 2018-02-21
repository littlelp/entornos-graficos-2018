<?php

include_once ("includes/cabecera.php");

if(isset($_SESSION['tipous'])){

if($_SESSION['tipous']==1){	

?>

	<div class= "container-fluid" id="contenidoedit">

		<div class="row">



					<div class="col-xs-8 col-sm-8 col-md-8 col-md-offset-1">
						<h2>Modificar contenido Web</h2>
						<br>
						
</div>	
			
			
					
				<br /><br />
				
					<div class="col-xs-10 col-sm-10 col-md-10 col-md-offset-1">

							<p style="text-align:center" ><a href="listar-novedades.php" class="btn btn-success btn-rounded">Novedades</a>
							<a href="listar-carousel.php" class="btn btn-warning btn-rounded">Carousel</a>
							<a href="contenido-editar.php" class="btn btn-primary btn-rounded">Centro Pagina Principal</a>		
							<a href="empresa-editar.php" class="btn btn-info btn-rounded">La Empresa</a>	
							<a href="cabecera-editar.php" class="btn btn-danger btn-rounded">Imagen Cabecera</a>								
                                   
					</div>
				
		</div>

	</div>

<?php 
}}
else {echo'<script language="javascript">window.location="index.php"</script>;';}

include_once ("includes/pie.php");
?>
  <script src="tinymce/js/tinymce/tinymce.min.js"></script> 
    <!-- Just be careful that you give correct path to your tinymce.min.js file, above is the default example -->
    <script>
        tinymce.init({selector:'textarea'});
    </script>

  