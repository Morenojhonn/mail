<!-- 
	Autor : jhon moreno ginna bonilla.
	Este es el archivo de verificación.
-->

<?php 
	
	$correo=$_GET['correo'];
	
	$edad=$_GET['edad'];

	

	echo "<br>";

	if ($edad > 40) {
		$error = "Eres cuchito";
	}else{
		$error = "Eres joven";
	}

 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Verificci&oacute;n</title>
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<link rel="icon" href="/img/animated_favicon1.gif" type="image/gif">
</head>
<body style="background-color: #08298A">
	<div class="container-fluid">
		<br>
		<div class="row">
			<div class="container">
				<div class="col-xs-12 col-md-4"></div>
				<div class="col-xs-12 col-md-4 " style="color : #ffffff">
					<center>
						<img width="100%" src="imagen/nube.png">
						<h1 style="color : black" class="well">
							Bienvanid@!!!
						</h1>
						<?php 
							echo "Se ha registrado el usuario ". $correo; 
							echo "<br>" . $error;
						?>
					</center>
				</div>
				<div class="col-xs-12 col-md-4"></div>
			</div>
		</div>
	</div>
</body>
</html>
