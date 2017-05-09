
<!-- 
	Autor : jhon moreno ginna bonilla.
	Este es el archivo principal de mi proyecto, ingresan los parámetros de envio de correo.
-->
<html>
<head>
<link rel="stylesheet"  href="css/bootstrap.min.css">
	<title>Mail</title>
</head>
<body>
<center>
	<div class="page-header">
  			<h2>Envia tu correo</h2>
		</div>
</center>

	<form action="mail.php" method="get">
	<div class="row">
		<div class="col-xs-12 col-md-4"></div>
			<div class="col-xs-12 col-md-4 well">
			<form action ="desktop.php" method="post">
				<div class="form-group">

					
		<font face="Comic Sans MS,arial,verdana"><span style="color: #226666;"><h3><b>PARA</b></h3></font>
	
		<input type="text" name="para" placeholder="Para">
			<br>
		<font face="Comic Sans MS,arial,verdana"><span style="color: #226666;"><h3><b>ASUNTO</b></h3></font>
		<input type="text" name="asunto" placeholder="Asunto">
			<br>
		<font face="Comic Sans MS,arial,verdana"><span style="color: #226666;"><h3><b>MENSAJE</b></h3></font>
		<input type="text" name="mensaje" placeholder="Mensaje">
			<br>
		<font face="Comic Sans MS,arial,verdana"><span style="color: #226666;"><h3><b>EDAD</b></h3></font>
		<input type="text" name="edad" placeholder="Edad">
			<br>
			<br>
		<button type="submit" class="btn btn-primary btn-lg btn-block" onClick="solvepg()">Enviar</button>
		

	</form>

</body>
</html>
