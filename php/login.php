<?php 
include_once ('../database/utilidades_sql.php');
include_once ('utilidades.php');

// el if sera de tipo Booleano ( SI o NO)

if ($_POST) {
	
// el signo de interrogacion se pregunta si los datos estan vacios 
// Isset recupera una variable $_POST

	$email=isset($_POST ['email'])?
	$_POST['email']:'';

	$contrasena=isset($_POST ['contrasena'])?
	$_POST['contrasena']:'';

	$datos_user= get_user_byid($email);

	if (PASSWORD_VERIFY($contrasena, $datos_user['contrasena'])) {
		$_SESSION['email']=$email;
		$_SESSION['rol']=$datos_user['rol'];

		header('location:../index.php');
		die();
		
		}
		else
		{
			header('location:../formularioregistro.php');
			
			die();
		}

	}


?>