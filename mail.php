<!-- 
	Autor : jhon moreno ginna bonilla.
	Este es el código de la función mail, me permite enviar el correo y ademas un mensaje.
-->
<link rel="stylesheet"  href="css/bootstrap.min.css">
<?php 

	$para=$_GET['para'];
	$edad=$_GET['edad'];
	$asunto=$_GET['asunto'];
	$mensaje=$_GET['mensaje'];

	// Este es el contenido que se vera en el correo
	$html = "<body>";
	$html .= $mensaje;
	$html .= "<br>";
	$html .= "<img src='https://morenojhon1996.000webhostapp.com/mail/imagen/hola.jpg'>";
	$html .= "<br>";
	$html .= "<a href='https://morenojhon1996.000webhostapp.com/mail/recepcion.php?correo=$para&edad=$edad'>Entrar</a>";
	$html .= "</body>";
	

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// Esta es el destinatario.
	$headers .= 'From: <morenojhon1996@approckola.com>' . "\r\n";
	

	mail($para, $asunto, $html, $headers);

 ?>
<br>
<br>
<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body style="color:#cccccc">
 	<div class="row">
 		<div class="col-xs-12 col-md-4"></div>
 		<div class="col-xs-12 col-md-4 well" style="background-color: #ffffff">
 			<h3><?php echo "Tu correo a sido enviado a  ". $para;  ?></h3>
 		</div>
 		<div class="col-xs-12 col-md-4"></div>
 	</div>
 </body>
 </html>
