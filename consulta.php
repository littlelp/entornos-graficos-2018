<?php

$html= '<html><head><meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/><style type=text/css>
		</style></head><body leftmargin="30" topmargin="30"><br><font color="#990100" size="5">Solicitud de Contacto</font><br><br>
		<table width="70%"  border="0" cellspacing="1" cellpadding="3">
        <tr><td colspan="2" bgcolor="#DDDDDD"><b>Información Personal</b></td></tr>
		<tr><td><b>Nombres:</b></td><td>'. $_POST["Nombre"].'</td></tr>
		<tr><td><b>Apellidos:</b></td><td>'. $_POST["Apellido"].'</td></tr>
		<tr><td><b>E-mail:</b></td><td>'. $_POST["Email"].'</td></tr>
		<tr><td><b>Teléfono:</b></td><td>'. $_POST["Tel"].'</td></tr>
		<tr><td colspan="2">&nbsp;</td></tr>
		<tr><td colspan="2" bgcolor="#DDDDDD"><b>Ubicación Geografica</b></td></tr>
		<tr><td><b>Ciudad:</b></td><td>'. $_POST["Ciudad"].'</td></tr>
		<tr><td><b>Provincia:</b></td><td>'. $_POST["Provincia"].'</td></tr>
		<tr><td colspan="2">&nbsp;</td></tr>
		<tr><td colspan="2" bgcolor="#DDDDDD"><b>Comentarios Adicionales</b></td></tr>
		<tr><td colspan="2">'. $_POST["Consulta"].'</td></tr>
		<tr><td colspan="2"><br><hr size="1" color="#990100"></td></tr>
		<tr><td colspan="2"><strong>Si usted lo desea, puede responder la consulta, respondiendo este mismo E-mail.</strong></td></tr>
		<tr><td colspan="2"><br><hr size="1" color="#990100"></td></tr>
		<tr><td colspan="2" align="right">Aplicación desarrollada por <a href="mailto:lachocolateria@gmail.com">La Chocolatería </a> 2018</td></tr>
	
		</table>
		</body></html>';
		

		
require_once('phpmailer/PHPMailerAutoload.php');		
require_once('phpmailer/class.phpmailer.php');
 
$correo = new PHPMailer(); //Creamos una instancia en lugar usar mail()
 
//Usamos el SetFrom para decirle al script quien envia el correo
$correo->SetFrom("l.peralta717@gmail.com");
 
//Usamos el AddReplyTo para decirle al script a quien tiene que responder el correo
$correo->AddReplyTo( $_POST["Email"]);
 
//Usamos el AddAddress para agregar un destinatario
$correo->AddAddress("lachocolateria00@gmail.com");
//Ponemos el asunto del mensaje
$correo->Subject = "Contacto WEB";
 
/*
 * Si deseamos enviar un correo con formato HTML utilizaremos MsgHTML:
 * $correo->MsgHTML("<strong>Mi Mensaje en HTML</strong>");
 * Si deseamos enviarlo en texto plano, haremos lo siguiente:
 * $correo->IsHTML(false);
 * $correo->Body = "Mi mensaje en Texto Plano";
 */
$correo->MsgHTML($html);
 
//Si deseamos agregar un archivo adjunto utilizamos AddAttachment
//$correo->AddAttachment("images/phpmailer.gif");
 
//Enviamos el correo
if(!$correo->Send()) {
  echo "Hubo un error: " . $correo->ErrorInfo;}
  else {echo'<script>window.location="consulta_enviada.php"</script>;';}
 
?>

