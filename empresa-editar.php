<?php

include_once ("includes/cabecera.php");

if(isset($_SESSION['tipous'])){

if($_SESSION['tipous']==1){	

?>

	<div class= "container-fluid" id="contenidoedit">

		<div class="row">



					<div class="col-xs-8 col-sm-8 col-md-8 col-md-offset-1">
						<h2>Modificar contenido "La Empresa"</h2>
						<br>
						
</div>	
			<?php
			
				$sql1 = "select contenidoempresa from web";

				$rs1 = mysqli_query($db, $sql1);
				
					while ($r = mysqli_fetch_array($rs1) ) {
				?>
			
					
				<br /><br />
				
					<div class="col-xs-10 col-sm-10 col-md-10 col-md-offset-1">

						<form action="modificar-empresa.php" method="post" enctype="multipart/form-data">
							
							<div class="file-field">
								<div class="btn btn-primary">
									<span>Seleccione Imagen</span>
									<input name="imagen" type="file">
								</div>
								<div class="file-path-wrapper">
								   <input class="file-path validate" type="text" placeholder="Subir Imagen">
								</div>
							</div>
						
	
						<div style="clear:both;"></div>
							
							<div class="md-form">
							<i class="fa fa-pencil prefix"></i>
							<textarea class="contenido" id="contenido" name="contenido"><?php echo $r["contenidoempresa"];?></textarea>
							<label for="contenido"></label>
						</div>
						
						<?php }?>
					
							<button type="submit" class="btn btn-default">Modificar</button>																		
                                   
					</div>
				
		</div>

	</div>

<?php 
}}
else {echo'<script>window.location="index.php"</script>;';}

include_once ("includes/pie.php");
?>
<script src="tinymce_4.0.2/tinymce/js/tinymce/tinymce.min.js"></script>

    <!-- Just be careful that you give correct path to your tinymce.min.js file, above is the default example -->
<script type="text/javascript">
        tinymce.init({
			language : 'es',
			selector: "textarea#contenido",
    theme: "modern",
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak table",
         "searchreplace wordcount visualblocks visualchars fullscreen insertdatetime media nonbreaking emoticons textcolor",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
   content_css: "css/content.css",
   toolbar: "insertfile undo redo preview | fontselect | fontsizeselect | forecolor backcolor emoticons | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | media fullpage", 
    fontsize_formats: "9pt 10pt 11pt 12pt 13pt 14pt 15pt 16pt 18pt 20pt 22pt 24pt",

	font_formats: "Andale Mono=andale mono,times;"+
        "Arial=arial,helvetica,sans-serif;"+
        "Arial Black=arial black,avant garde;"+
        "Book Antiqua=book antiqua,palatino;"+
        "Comic Sans MS=comic sans ms,sans-serif;"+
        "Courier New=courier new,courier;"+
        "Georgia=georgia,palatino;"+
        "Helvetica=helvetica;"+
        "Impact=impact,chicago;"+
        "Symbol=symbol;"+
        "Tahoma=tahoma,arial,helvetica,sans-serif;"+
        "Terminal=terminal,monaco;"+
        "Times New Roman=times new roman,times;"+
        "Trebuchet MS=trebuchet ms,geneva;"+
        "Verdana=verdana,geneva;"+
        "Webdings=webdings;"+
        "Wingdings=wingdings,zapf dingbats",
 }); 		
</script>
  
  