<?php 
include_once ("includes/cabecera.php");
?>


	<div class= "container-fluid" id="contenidocontacto">
	
		<div class="row">

					
				
				
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="float:left" id="mapa-datos" >
					<BR>
					<div class="google-maps">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13189.170731666763!2d-62.718989!3d-34.266588!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe2de65a2207ab136!2sNTG+Pastas+--+Panquequeras+-+Tarteleteras+-+Ravioleras!5e0!3m2!1ses!2sus!4v1468245141651" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<BR>
					<p id="p11">La Chocolateria</p>
					<p id="p12">Rufino – Santa Fe – Republica Argentina</p>
					<p id="p13">Domicilio:  Alberdi 475 – CP: 6100</p>
					<p id="p14"><a href="mailto:lachocolateria00@gmail.com">E-Mail: lachocolateria00@gmail.com</a></p>
					<p id="p16">Telefonos: 0341-4237960</p> 
					
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="float:right" id="formulario">
				
					<H4 style="text-align:center">Envianos tu Consulta:</h4>
							<form name ="formularioContacto" action="consulta.php" method="post">
							
							<div class="md-form">
								<i class="fa fa-user prefix"></i>
								<input type="text" id="nombre" name="Nombre" class="form-control validate" maxlength="10" required>
								<label for="Nombre">Nombre:</label>
							</div>
		
		
							<div class="md-form">
								<i class="fa fa-user prefix"></i>
								<input type="text" id="apellido" name="Apellido" class="form-control validate" maxlength="10" required>
								<label for="Apellido">Apellido:</label>
							</div>
		
		
	
							
							<div class="md-form">
								<i class="fa fa-envelope prefix"></i>
								<input type="email" id="email" name="Email" class="form-control validate" maxlength="40" required>
								<label for="Email">E-Mail:</label>
							</div>


							<div class="md-form">
								<i class="fa fa-phone prefix"></i>
								<input type="tel" id="tel" name="Tel" class="form-control validate" maxlength="15" required>
								<label for="Tel">Tel:</label>
							</div>		
		
							<div class="md-form">
								<i class="fa fa-home prefix"></i>
								<input type="text" id="ciudad" name="Ciudad" class="form-control validate" maxlength="10" required>
								<label for="Ciudad">Ciudad:</label>
							</div>                                 
		
							<div class="md-form">
								<i class="fa fa-globe prefix"></i>
								<input type="text" id="provincia" name="Provincia" class="form-control validate" maxlength="15" required>
								<label for="Provincia">Provincia:</label>
							</div>
			

							<div class="md-form">
								<i class="fa fa-pencil prefix"></i>
								<textarea type="text" id="consulta" name="Consulta" maxlength="500" class="md-textarea" required></textarea>
								<label for="Consulta">Consulta:</label>
							</div>
				
							<button type="submit" class="btn btn-default">Enviar</button>
		
				</div>
		</div>
	</div>
		
	

	
	<?php 
include_once ("includes/pie.php");
?>