<?php 
include_once ('../database/utilidades_sql.php');
include_once('validacion.php');
//include_once ('validacion.php')
// el if sera de tipo Booleano ( SI o NO) cuando solo hay variable 

if ($_POST) {
	
// el signo de interrogacion se pregunta si los datos estan vacios 
// Isset recupera una variable $_POST

	$nombrec=isset($_POST ['nombrec'])?
	$_POST['nombrec']:'';

	$apellidoc=isset($_POST ['apellidoc'])?
	$_POST['apellidoc']:'';

	$tipoid=isset($_POST ['tipoid'])?
	$_POST['tipoid']:'';

	$numeroid=isset($_POST ['numeroid'])?
	$_POST['numeroid']:'';

	$email=isset($_POST ['email'])?
	$_POST['email']:'';

	$contrasena=isset($_POST ['contrasena'])?
	$_POST['contrasena']:'';

	$ccontrasena=isset($_POST ['ccontrasena'])?
	$_POST['ccontrasena']:'';

		$ano=isset($_POST ['ano'])?
	$_POST['ano']:'';

		$mes=isset($_POST ['mes'])?
	$_POST['mes']:'';

		$dia=isset($_POST ['dia'])?
	$_POST['dia']:'';


	$fec_nac= $ano."-".$mes."-".$dia;


	$nacionalidad=isset($_POST ['nacionalidad'])?
	$_POST['nacionalidad']:'';

	$ciudad=isset($_POST ['ciudad'])?
	$_POST['ciudad']:'';

	$localidad=isset($_POST ['localidad'])?
	$_POST['localidad']:'';

	$rol=isset($_POST ['rol'])?
	$_POST['rol']:'cliente';

//password_hash Encripta la contraseña 
//PASSWORD_DEFAULT Es el metodo de encriptacion



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
	$result = set_registro($nombrec, $apellidoc, $tipoid, $numeroid, $email , $contrasena , $fec_nac , $nacionalidad , $ciudad , $localidad , $rol);
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
		
		//echo "<h3>Usuario creado exitosamente<h3>";
		header('refresh:0 url=../formulariologin.php');	
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
}

?>
