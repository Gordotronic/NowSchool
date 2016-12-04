<?php 
include_once ('../database/utilidades_sql.php');
include_once ('utilidades.php');
include_once('validacion.php');

// el if sera de tipo Booleano ( SI o NO) cuando solo hay variable 


if ($_POST) {
	
// el signo de interrogacion se pregunta si los datos estan vacios 
// Isset recupera una variable $_POST

	$codigo_nit=isset($_POST ['codigo_nit'])?
	$_POST['codigo_nit']:'';
	$nombre=isset($_POST ['nombre'])?
	$_POST['nombre']:'';
	$contrasena=isset($_POST ['contrasena'])?
	$_POST['contrasena']:'';
	$ccontrasena=isset($_POST ['ccontrasena'])?
	$_POST['ccontrasena']:'';
	$direccion=isset($_POST ['direccion'])?
	$_POST['direccion']:'';
	$localidad=isset($_POST ['localidad'])?
	$_POST['localidad']:'';
	$telefono=isset($_POST ['telefono'])?
	$_POST['telefono']:'';
	$pagina_web=isset($_POST ['pagina_web'])?
	$_POST['pagina_web']:'';
	$email=isset($_POST ['email'])?
	$_POST['email']:'';
	$rol=isset($_POST ['rol'])?
	$_POST['rol']:'colegio';

	// la funcion que va a recibir los datos

if($contrasena!==$ccontrasena)
{
	echo "<SCRIPT language='javascript'>alert('Las contraseñas no coinciden');</SCRIPT>";
	header('refresh:0 url=../formularioregistro.php');	
	die();
}
	else
	{
		
		$resultado=validacion($contrasena);

		if ($resultado==1){

	// la funcion que va a recibir los datos
			$contrasena=password_hash($contrasena , PASSWORD_DEFAULT); 
	$result = set_colegio ($codigo_nit , $nombre ,$contrasena, $direccion , $localidad, $telefono , $pagina_web , $email , $rol);
	
}
else{
		echo "<SCRIPT language='javascript'>alert('La contrasena no cumple con los parametros ()');</SCRIPT>";
		header('refresh:0 url=../formularioregistro.php');	
		die();
}
// "!" Sentencia de negacion
// el if sera de tipo Booleano ( SI o NO) cuando solo hay variable 

	if(!$result){

// "ob_start" es un ciclo 
		ob_start();
		
		echo "<h3>Usuario creado exitosamente<h3>";
		header('refresh:0 url=../formulariocolegios.php');	
		echo "<SCRIPT language='javascript'>alert('Usuario creado exitosamente');</SCRIPT>";	
		ob_end_flush();
		die();
	}

	else{

//Redirecciona al archivo establecido en el parametro location
		$_SESSION ['usuario'] = $email;
		$_SESSION ['rol'] = $rol;
		header('location:../index.php');
	}	
// termina la ejecucion del archivo

	}
	//else{header('location:../formularioregistro.php');}
	

	//	header('Location:../formulariocolegios.php');
}

 ?>
