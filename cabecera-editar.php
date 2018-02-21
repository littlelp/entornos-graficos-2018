<?php

include_once ("includes/cabecera.php");

if(isset($_SESSION['tipous'])){

if($_SESSION['tipous']==1){	

?>

	<div class= "container-fluid" id="contenidoedit">

		<div class="row">



					<div class="col-xs-8 col-sm-8 col-md-8 col-md-offset-1">
						<h2>Modificar imagen Cabecera</h2>
						<br>
						
</div>	
			
			
					
				<br /><br />
				
					<div class="col-xs-10 col-sm-10 col-md-10 col-md-offset-1">

						<form action="modificar-imgcabecera.php" method="post" enctype="multipart/form-data">
							
							<div class="file-field">
								<div class="btn btn-primary">
									<span>Seleccione Imagen</span>
									<input name="imagen" type="file">
								</div>
								<div class="file-path-wrapper">
								   <input class="file-path validate" type="text" placeholder="Subir Imagen">
								</div>
								<p> Tamaño recomendado: 1170px horizontales. 100px verticales </p>
							</div>
						
	
						<div style="clear:both;"></div>
							
					
						
					
					
							<button type="submit" class="btn btn-default">Modificar</button>																		
                                   
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

  