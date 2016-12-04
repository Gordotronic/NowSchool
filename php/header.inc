
<?php
	include_once ('php/utilidades.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Now School</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/carrusel.css">
	<link rel="shortcut icon" type="img/jpg" href="img/logo.png">
</head>
<body>
	<header>
		<div class ="FI" id="logo"></div>
		<div class ="FC" id="titulo"></div>
		<div class ="FD" id="login">
			<?php
				if(isset ($_SESSION['email'])){
				echo "<a href='php/logout.php'><h3>Cerrar Sesion</h3></a>";
				echo "<a href='formulariocambiocontrasena.php'><h3>Cambiar de Contraseña</h3></a>";
			?>
		</div>
	</header>
			<div class="aside">
				<nav>
					<?php
					if($_SESSION['rol']=='admin'){
							include_once ('madmin.inc');

						}elseif($_SESSION['rol']=='colegio'){
								include_once ('mcolegio.inc');
						}elseif($_SESSION['rol']=='cliente') {
							 include_once ('mcliente.inc');
						} 
					}else{
						 echo "<a href='formulariologin.php'><h3>Ingresar</h3></a>";
						 echo "<a href='formularioregistro.php'><h3>Registrar</h3></a>";
						 echo"</div> </header> <nav>";
						 include_once ('msinlogin.inc');
					}
					?>
				
					<div id="principal">