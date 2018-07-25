<?php 
include_once ("includes/cabecera.php");
?>


	<div class= "container-fluid" id="contenidocontacto">
	
		<div class="row">

					
				
				
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="float:left" id="mapa-datos" >
					<BR>
					<div class="google-maps">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3348.1045280169164!2d-60.64286638425279!3d-32.94824957930047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b7ab17500d7b83%3A0xebec6f7380b10cf9!2sPje.+Ing.+Araya%2C+Rosario%2C+Santa+Fe!5e0!3m2!1ses-419!2sar!4v1532481853035" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<BR>
					<p id="p11">La Chocolatería</p>
					<p id="p12">Rosario, Santa Fe, Argentina</p>
					<p id="p13">Domicilio:  Avenida Siempre Viva 123</p>
					<p id="p14"><a href="mailto:lachocolateria@gmail.com">E-Mail: lachocolateria@gmail.com</a></p>
					<p id="p16">Telefonos: 03382-429951</p> 
					
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